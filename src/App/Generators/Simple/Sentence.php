<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Sentence extends BaseSimpleGenerator implements GeneratorInterface
{
    private $nbWords = 6;
    private $variableNbWords = true;

    /**
     * Generate a random sentence
     *
     * @example 'Lorem ipsum dolor sit amet.'
     *
     * @param int  $nbWords         around how many words the sentence should contain
     * @param bool $variableNbWords set to false if you want exactly $nbWords returned,
     *                              otherwise $nbWords may vary by +/-40% with a minimum of 1
     *
     * @return string
     */
    public function sentence($nbWords = 6, $variableNbWords = true, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->sentence(
            $this->nbWords,
            $this->variableNbWords,
        );
    }

    public function nbWords($nbWords): static
    {
        $this->nbWords = $nbWords;
        return $this;
    }

    public function variableNbWords($variableNbWords): static
    {
        $this->variableNbWords = $variableNbWords;
        return $this;
    }

}