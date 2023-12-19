<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class FirstName extends BaseSimpleGenerator implements GeneratorInterface
{
    private $gender = null;

    /**
     * @param string|null $gender 'male', 'female' or null for any
     *
     * @return string
     *
     * @example 'John'
     */
    public function firstName($gender = null, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->firstName(
            $this->gender,
        );
    }

    public function gender($gender): static
    {
        $this->gender = $gender;
        return $this;
    }

}