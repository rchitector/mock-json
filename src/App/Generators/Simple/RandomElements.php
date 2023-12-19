<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class RandomElements extends BaseSimpleGenerator implements GeneratorInterface
{
    private $array = ["a","b","c"];
    private $count = 1;
    private $allowDuplicates = false;

    /**
     * Returns randomly ordered subsequence of $count elements from a provided array
     *
     * @todo update default $count to `null` (BC) for next major version
     *
     * @param array|class-string|\Traversable $array           Array to take elements from. Defaults to a-c
     * @param int|null                        $count           Number of elements to take. If `null` then returns random number of elements
     * @param bool                            $allowDuplicates Allow elements to be picked several times. Defaults to false
     *
     * @throws \InvalidArgumentException
     * @throws \LengthException          When requesting more elements than provided
     *
     * @return array New array with $count elements from $array
     */
    public function randomElements($array = ["a","b","c"], $count = 1, $allowDuplicates = false, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->randomElements(
            $this->array,
            $this->count,
            $this->allowDuplicates,
        );
    }

    public function array($array): static
    {
        $this->array = $array;
        return $this;
    }

    public function count($count): static
    {
        $this->count = $count;
        return $this;
    }

    public function allowDuplicates($allowDuplicates): static
    {
        $this->allowDuplicates = $allowDuplicates;
        return $this;
    }

}