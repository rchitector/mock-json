<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class E164PhoneNumber extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example +11134567890
     *
     * @return string
     */
    public function e164PhoneNumber(): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->e164PhoneNumber(
        );
    }

}