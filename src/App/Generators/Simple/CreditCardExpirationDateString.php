<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class CreditCardExpirationDateString extends BaseSimpleGenerator implements GeneratorInterface
{
    private $valid = true;
    private $expirationDateFormat = null;

    /**
     * @param bool   $valid                True (by default) to get a valid expiration date, false to get a maybe valid date
     * @param string $expirationDateFormat
     *
     * @return string
     *
     * @example '04/13'
     */
    public function creditCardExpirationDateString($valid = true, $expirationDateFormat = null, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->creditCardExpirationDateString(
            $this->valid,
            $this->expirationDateFormat,
        );
    }

    public function valid($valid): static
    {
        $this->valid = $valid;
        return $this;
    }

    public function expirationDateFormat($expirationDateFormat): static
    {
        $this->expirationDateFormat = $expirationDateFormat;
        return $this;
    }

}