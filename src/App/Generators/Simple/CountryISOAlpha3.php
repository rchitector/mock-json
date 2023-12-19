<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class CountryISOAlpha3 extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example 'FRA'
     *
     * @see https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
     *
     * @return string
     */
    public function countryISOAlpha3(): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->countryISOAlpha3(
        );
    }

}