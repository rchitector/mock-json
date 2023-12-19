<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Sentences extends BaseSimpleGenerator implements GeneratorInterface
{
    private $nb = 3;
    private $asText = false;

    /**
     * Generate an array of sentences
     *
     * @example array('Lorem ipsum dolor sit amet.', 'Consectetur adipisicing eli.')
     *
     * @param int  $nb     how many sentences to return
     * @param bool $asText if true the sentences are returned as one string
     *
     * @return array|string
     */
    public function sentences($nb = 3, $asText = false, ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->sentences(
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