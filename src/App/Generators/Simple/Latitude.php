<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Latitude extends BaseSimpleGenerator implements GeneratorInterface
{
    private $min = -90;
    private $max = 90;

    /**
     * Uses signed degrees format (returns a float number between -90 and 90)
     *
     * @example '77.147489'
     *
     * @param float|int $min
     * @param float|int $max
     *
     * @return float
     */
    public function latitude($min = -90, $max = 90, ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->latitude(
            $this->min,
            $this->max,
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

}