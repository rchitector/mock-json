<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Timezone extends BaseSimpleGenerator implements GeneratorInterface
{
    private $countryCode = null;

    /**
     * @return string
     *
     * @example 'Europe/Paris'
     */
    public function timezone($countryCode = null, ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->timezone(
            $this->countryCode,
        );
    }

    public function countryCode($countryCode): static
    {
        $this->countryCode = $countryCode;
        return $this;
    }

}