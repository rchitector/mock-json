<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Emoji extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * Returns an Emoji (Unicode character between U+1F600 and U+1F637).
     *
     * @see https://en.wikipedia.org/wiki/Emoji#Unicode_blocks
     *
     * @return string
     */
    public function emoji(): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->emoji(
        );
    }

}