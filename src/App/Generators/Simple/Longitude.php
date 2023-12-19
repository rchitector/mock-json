<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Longitude extends BaseSimpleGenerator implements GeneratorInterface
{
    private $min = -180;
    private $max = 180;

    /**
     * Uses signed degrees format (returns a float number between -180 and 180)
     *
     * @example '86.211205'
     *
     * @param float|int $min
     * @param float|int $max
     *
     * @return float
     */
    public function longitude($min = -180, $max = 180, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->longitude(
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