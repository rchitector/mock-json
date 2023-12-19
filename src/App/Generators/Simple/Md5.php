<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Md5 extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example 'cfcd208495d565ef66e7dff9f98764da'
     *
     * @return string
     */
    public function md5(): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->md5(
        );
    }

}