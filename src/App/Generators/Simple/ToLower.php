<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class ToLower extends BaseSimpleGenerator implements GeneratorInterface
{
    private $string = "";

    /**
     * Converts string to lowercase.
     * Uses mb_string extension if available.
     *
     * @param string $string String that should be converted to lowercase
     *
     * @return string
     */
    public function toLower($string = "", ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->toLower(
            $this->string,
        );
    }

    public function string($string): static
    {
        $this->string = $string;
        return $this;
    }

}