<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Ipv6 extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example '35cd:186d:3e23:2986:ef9f:5b41:42a4:e6f1'
     *
     * @return string
     */
    public function ipv6(): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->ipv6(
        );
    }

}