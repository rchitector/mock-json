<?php

namespace Rchitector\MockJson\App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Rchitector\MockJson\App\Generators\Factory;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use ReflectionParameter;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;
use Faker;

class GenerateClasses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mock-json:generate-classes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate class wrappers for faker generators';

    private static function classMethodsOnly($className): array
    {
        $validMethods = get_class_methods($className);
        $parentClass = get_parent_class($className);
        if ($parentClass) {
            $parentClassMethods = get_class_methods($parentClass);
            $validMethods = array_diff($validMethods, $parentClassMethods);
        }
        sort($validMethods);

        $resultMethods = [];
        foreach ((new ReflectionClass($className))->getMethods() as $classMethod) {
            if (in_array($classMethod->getName(), $validMethods)) {
                $resultMethods[$classMethod->getName()] = $classMethod;
            }
        }
        ksort($resultMethods);
        return array_values($resultMethods);
    }

    /**
     * @throws ReflectionException
     */
    private function getFakerProvidersMethods(): array
    {
        $availableMethods = $this->getFakerGeneratorMethods();
        $availableMethodsKeys = array_keys($availableMethods);
        $methods = [];
        foreach (Factory::defaultProviders() as $provider) {
            $classMethods = GenerateClasses::classMethodsOnly("Faker\Provider\\$provider");
//            if ($provider == 'Address') {
//                dump($classMethods);
//                dump($availableMethodsKeys);
//                dd();
//            }

            /** @var ReflectionMethod $classMethod */
            foreach ($classMethods as $classMethod) {
                if (in_array($classMethod->getName(), $availableMethodsKeys)) {
                    $methods[] = $classMethod;
                }
            }
        }
        return $methods;
    }

    private function getFakerGeneratorMethods(): array
    {
        $methods = [];
        $fileName = (new ReflectionClass(Faker\Generator::class))->getFileName();
        preg_match_all('/@method\s+[^\r\n]+/', file_get_contents($fileName), $matches);
        foreach ($matches[0] as $line) {
//            $pattern = '/@method\s+\w+(\[\|\])?\s+([\w\\\[\]]+)\s*(\([^)]*\))/';
            $pattern = '/@method\s+(\S+)\s+([\w\\\[\]]+)\s*\(([^)]*)\)/';
//            $names = [
//                '@method float[] localCoordinates()',
//                '@method float latitude($min = -90, $max = 90)'
//            ];
//            if (in_array($line, $names)) {
//                preg_match($pattern, $line, $m);
//                dump($line);
//                dump($m);
//            }
            if (preg_match($pattern, $line, $matches)) {
                $method_name = $matches[2];
                preg_match('/^([a-z]+)([A-Z].*)$/', $method_name, $name_matches);
                if (isset($name_matches[1]) && $name_matches[1] == 'set') { // excluding setters
                    continue;
                }
                $methods[$method_name] = $matches[3];
            }
        }
        return $methods;
    }

    /**
     * @throws SyntaxError
     * @throws ReflectionException
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function handle(): void
    {
        $path = base_path('vendor/rchitector/mock-json/src/App/Generators');
        $loader = new FilesystemLoader($path);
        $twig = new Environment($loader);
        File::makeDirectory($path.DIRECTORY_SEPARATOR.'Simple', 0755, true, true);
        $template = $twig->load('SimpleGeneratorClassTemplate.php.twig');

        $generators = [];

        /** @var ReflectionMethod $classMethod */
        foreach ($this->getFakerProvidersMethods() as $classMethod) {
            $parameters = [];
            foreach ($classMethod->getParameters() as $parameter) {
                $parameterData = array(
                    'name' => $parameter->getName()
                );
                if ($parameter->isDefaultValueAvailable()) {
                    $parameterData['default_json_value'] = json_encode($parameter->getDefaultValue());
                    $parameterData['default_value'] = $parameter->getDefaultValue();
                }
                $parameters[] = $parameterData;
            }

            $className = ucfirst($classMethod->getName());

            $generators[$className] = ['className' => $className, 'functionName' => $classMethod->getName()];

            $returnType = $classMethod->getReturnType();
            if (!$returnType) {
                $pattern = '/@return\s+(\S+)/';
                if (preg_match($pattern, $classMethod->getDocComment(), $matches)) {
                    $returnType = $matches[1];
                }
            }
            if (!$returnType) {
                $returnType = 'mixed';
            }
            $content = $template->render([
                'className' => $className,
                'parameters' => $parameters,
                'classMethodName' => $classMethod->getName(),
                'returnType' => $returnType,
                'docComment' => $classMethod->getDocComment(),
            ]);
            $filePath = $path.DIRECTORY_SEPARATOR.'Simple'.DIRECTORY_SEPARATOR.$className.'.php';
//                if (!file_exists($filePath)) {
            File::put($filePath, $content);
//                }


            ksort($generators);

            File::put(
                $path.DIRECTORY_SEPARATOR.'Simple.php',
                $twig->load('SimpleClassTemplate.php.twig')->render(['generators' => $generators]),
                true
            );
        }
    }
}
