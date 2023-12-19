<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Sha1 extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example 'b5d86317c2a144cd04d0d7c03b2b02666fafadf2'
     *
     * @return string
     */
    public function sha1(): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->sha1(
        );
    }

}