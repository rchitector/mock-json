<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Words extends BaseSimpleGenerator implements GeneratorInterface
{
    private $nb = 3;
    private $asText = false;

    /**
     * Generate an array of random words
     *
     * @example array('Lorem', 'ipsum', 'dolor')
     *
     * @param int  $nb     how many words to return
     * @param bool $asText if true the sentences are returned as one string
     *
     * @return array|string
     */
    public function words($nb = 3, $asText = false, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->words(
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