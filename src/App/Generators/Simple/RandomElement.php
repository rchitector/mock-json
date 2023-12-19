<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class RandomElement extends BaseSimpleGenerator implements GeneratorInterface
{
    private $array = ["a","b","c"];

    /**
     * Returns a random element from a passed array
     *
     * @param array|class-string|\Traversable $array
     *
     * @throws \InvalidArgumentException
     */
    public function randomElement($array = ["a","b","c"], ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->randomElement(
            $this->array,
        );
    }

    public function array($array): static
    {
        $this->array = $array;
        return $this;
    }

}