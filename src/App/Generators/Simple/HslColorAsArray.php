<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class HslColorAsArray extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example array(340, 50, 20)
     *
     * @return array
     */
    public function hslColorAsArray(): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->hslColorAsArray(
        );
    }

}