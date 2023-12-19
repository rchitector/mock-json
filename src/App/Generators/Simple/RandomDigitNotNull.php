<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class RandomDigitNotNull extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * Returns a random number between 1 and 9
     *
     * @return int
     */
    public function randomDigitNotNull(): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->randomDigitNotNull(
        );
    }

}