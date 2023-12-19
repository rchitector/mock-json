<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class CreditCardDetails extends BaseSimpleGenerator implements GeneratorInterface
{
    private $valid = true;

    /**
     * @param bool $valid True (by default) to get a valid expiration date, false to get a maybe valid date
     *
     * @return array
     */
    public function creditCardDetails($valid = true, ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->creditCardDetails(
            $this->valid,
        );
    }

    public function valid($valid): static
    {
        $this->valid = $valid;
        return $this;
    }

}