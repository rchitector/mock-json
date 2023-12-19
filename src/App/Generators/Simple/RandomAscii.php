<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class RandomAscii extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * Returns a random ASCII character (excluding accents and special chars)
     *
     * @return string
     */
    public function randomAscii(): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->randomAscii(
        );
    }

}