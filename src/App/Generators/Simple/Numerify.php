<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Numerify extends BaseSimpleGenerator implements GeneratorInterface
{
    private $string = "###";

    /**
     * Replaces all hash sign ('#') occurrences with a random number
     * Replaces all percentage sign ('%') occurrences with a not null number
     *
     * @param string $string String that needs to bet parsed
     *
     * @return string
     */
    public function numerify($string = "###", ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->numerify(
            $this->string,
        );
    }

    public function string($string): static
    {
        $this->string = $string;
        return $this;
    }

}