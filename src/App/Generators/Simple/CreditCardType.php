<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class CreditCardType extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @return string Returns a credit card vendor name
     *
     * @example 'MasterCard'
     */
    public function creditCardType(): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->creditCardType(
        );
    }

}