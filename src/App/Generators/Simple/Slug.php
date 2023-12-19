<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Slug extends BaseSimpleGenerator implements GeneratorInterface
{
    private $nbWords = 6;
    private $variableNbWords = true;

    /**
     * @example 'aut-repellat-commodi-vel-itaque-nihil-id-saepe-nostrum'
     *
     * @return string
     */
    public function slug($nbWords = 6, $variableNbWords = true, ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->slug(
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