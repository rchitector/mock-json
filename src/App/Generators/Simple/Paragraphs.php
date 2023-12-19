<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Paragraphs extends BaseSimpleGenerator implements GeneratorInterface
{
    private $nb = 3;
    private $asText = false;

    /**
     * Generate an array of paragraphs
     *
     * @example array($paragraph1, $paragraph2, $paragraph3)
     *
     * @param int  $nb     how many paragraphs to return
     * @param bool $asText if true the paragraphs are returned as one string, separated by two newlines
     *
     * @return array|string
     */
    public function paragraphs($nb = 3, $asText = false, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->paragraphs(
            $this->nb,
            $this->asText,
        );
    }

    public function nb($nb): static
    {
        $this->nb = $nb;
        return $this;
    }

    public function asText($asText): static
    {
        $this->asText = $asText;
        return $this;
    }

}