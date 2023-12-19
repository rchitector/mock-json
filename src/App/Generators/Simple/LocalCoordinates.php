<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class LocalCoordinates extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example array('77.147489', '86.211205')
     *
     * @return float[]
     */
    public function localCoordinates(): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->localCoordinates(
        );
    }

}