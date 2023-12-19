<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class RandomKey extends BaseSimpleGenerator implements GeneratorInterface
{
    private $array = [];

    /**
     * Returns a random key from a passed associative array
     *
     * @param array $array
     *
     * @return int|string|null
     */
    public function randomKey($array = [], ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->randomKey(
            $this->array,
        );
    }

    public function array($array): static
    {
        $this->array = $array;
        return $this;
    }

}