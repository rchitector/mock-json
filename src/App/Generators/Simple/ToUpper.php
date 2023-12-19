<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class ToUpper extends BaseSimpleGenerator implements GeneratorInterface
{
    private $string = "";

    /**
     * Converts string to uppercase.
     * Uses mb_string extension if available.
     *
     * @param string $string String that should be converted to uppercase
     *
     * @return string
     */
    public function toUpper($string = "", ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->toUpper(
            $this->string,
        );
    }

    public function string($string): static
    {
        $this->string = $string;
        return $this;
    }

}