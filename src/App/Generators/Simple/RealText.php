<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class RealText extends BaseSimpleGenerator implements GeneratorInterface
{
    private $maxNbChars = 200;
    private $indexSize = 2;

    /**
     * Generate a text string by the Markov chain algorithm.
     *
     * Depending on the $maxNbChars, returns a random valid looking text. The algorithm
     * generates a weighted table with the specified number of words as the index and the
     * possible following words as the value.
     *
     * @example 'Alice, swallowing down her flamingo, and began by taking the little golden key'
     *
     * @param int $maxNbChars Maximum number of characters the text should contain (minimum: 10)
     * @param int $indexSize  Determines how many words are considered for the generation of the next word.
     *                        The minimum is 1, and it produces a higher level of randomness, although the
     *                        generated text usually doesn't make sense. Higher index sizes (up to 5)
     *                        produce more correct text, at the price of less randomness.
     *
     * @return string
     */
    public function realText($maxNbChars = 200, $indexSize = 2, ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->realText(
            $this->maxNbChars,
            $this->indexSize,
        );
    }

    public function maxNbChars($maxNbChars): static
    {
        $this->maxNbChars = $maxNbChars;
        return $this;
    }

    public function indexSize($indexSize): static
    {
        $this->indexSize = $indexSize;
        return $this;
    }

}