<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Lexify extends BaseSimpleGenerator implements GeneratorInterface
{
    private $string = "????";

    /**
     * Replaces all question mark ('?') occurrences with a random letter
     *
     * @param string $string String that needs to bet parsed
     *
     * @return string
     */
    public function lexify($string = "????", ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->lexify(
            $this->string,
        );
    }

    public function string($string): static
    {
        $this->string = $string;
        return $this;
    }

}