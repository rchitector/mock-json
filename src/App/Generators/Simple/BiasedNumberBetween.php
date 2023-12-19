<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class BiasedNumberBetween extends BaseSimpleGenerator implements GeneratorInterface
{
    private $min;
    private $max = 100;
    private $function = "sqrt";

    /**
     * Returns a biased integer between $min and $max (both inclusive).
     * The distribution depends on $function.
     *
     * The algorithm creates two doubles, x ∈ [0, 1], y ∈ [0, 1) and checks whether the
     * return value of $function for x is greater than or equal to y. If this is
     * the case the number is accepted and x is mapped to the appropriate integer
     * between $min and $max. Otherwise two new doubles are created until the pair
     * is accepted.
     *
     * @param int      $min      Minimum value of the generated integers.
     * @param int      $max      Maximum value of the generated integers.
     * @param callable $function A function mapping x ∈ [0, 1] onto a double ∈ [0, 1]
     *
     * @return int An integer between $min and $max.
     */
    public function biasedNumberBetween($min, $max = 100, $function = "sqrt", ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->biasedNumberBetween(
            $this->min,
            $this->max,
            $this->function,
        );
    }

    public function min($min): static
    {
        $this->min = $min;
        return $this;
    }

    public function max($max): static
    {
        $this->max = $max;
        return $this;
    }

    public function function($function): static
    {
        $this->function = $function;
        return $this;
    }

}