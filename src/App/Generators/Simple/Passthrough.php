<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Passthrough extends BaseSimpleGenerator implements GeneratorInterface
{
    private $value;

    /**
     * Returns the passed value
     */
    public function passthrough($value, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->passthrough(
            $this->value,
        );
    }

    public function value($value): static
    {
        $this->value = $value;
        return $this;
    }

}