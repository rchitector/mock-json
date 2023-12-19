<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class CreditCardExpirationDate extends BaseSimpleGenerator implements GeneratorInterface
{
    private $valid = true;

    /**
     * @param bool $valid True (by default) to get a valid expiration date, false to get a maybe valid date
     *
     * @return \DateTime
     *
     * @example 04/13
     */
    public function creditCardExpirationDate($valid = true, ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->creditCardExpirationDate(
            $this->valid,
        );
    }

    public function valid($valid): static
    {
        $this->valid = $valid;
        return $this;
    }

}