<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Text extends BaseSimpleGenerator implements GeneratorInterface
{
    private $maxNbChars = 200;

    /**
     * Generate a text string.
     * Depending on the $maxNbChars, returns a string made of words, sentences, or paragraphs.
     *
     * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
     *
     * @param int $maxNbChars Maximum number of characters the text should contain (minimum 5)
     *
     * @return string
     */
    public function text($maxNbChars = 200, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->text(
            $this->maxNbChars,
        );
    }

    public function maxNbChars($maxNbChars): static
    {
        $this->maxNbChars = $maxNbChars;
        return $this;
    }

}