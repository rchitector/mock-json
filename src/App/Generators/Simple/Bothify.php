<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Bothify extends BaseSimpleGenerator implements GeneratorInterface
{
    private $string = "## ??";

    /**
     * Replaces hash signs ('#') and question marks ('?') with random numbers and letters
     * An asterisk ('*') is replaced with either a random number or a random letter
     *
     * @param string $string String that needs to be parsed
     *
     * @return string
     */
    public function bothify($string = "## ??", ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->bothify(
            $this->string,
        );
    }

    public function string($string): static
    {
        $this->string = $string;
        return $this;
    }

}