<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class ShuffleString extends BaseSimpleGenerator implements GeneratorInterface
{
    private $string = "";
    private $encoding = "UTF-8";

    /**
     * Returns a shuffled version of the string.
     *
     * This function does not mutate the original string. It uses the
     * Fisher–Yates algorithm, which is unbiased, together with a Mersenne
     * twister random generator. This function is therefore more random than
     * PHP's shuffle() function, and it is seedable. Additionally, it is
     * UTF8 safe if the mb extension is available.
     *
     * @see http://en.wikipedia.org/wiki/Fisher%E2%80%93Yates_shuffle
     *
     * @example $faker->shuffleString('hello, world'); // 'rlo,h eold!lw'
     *
     * @param string $string   The set to shuffle
     * @param string $encoding The string encoding (defaults to UTF-8)
     *
     * @return string The shuffled set
     */
    public function shuffleString($string = "", $encoding = "UTF-8", ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->shuffleString(
            $this->string,
            $this->encoding,
        );
    }

    public function string($string): static
    {
        $this->string = $string;
        return $this;
    }

    public function encoding($encoding): static
    {
        $this->encoding = $encoding;
        return $this;
    }

}