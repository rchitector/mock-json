<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Asciify extends BaseSimpleGenerator implements GeneratorInterface
{
    private $string = "****";

    /**
     * Replaces * signs with random numbers and letters and special characters
     *
     * @example $faker->asciify(''********'); // "s5'G!uC3"
     *
     * @param string $string String that needs to bet parsed
     *
     * @return string
     */
    public function asciify($string = "****", ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->asciify(
            $this->string,
        );
    }

    public function string($string): static
    {
        $this->string = $string;
        return $this;
    }

}