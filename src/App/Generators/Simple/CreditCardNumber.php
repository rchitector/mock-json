<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class CreditCardNumber extends BaseSimpleGenerator implements GeneratorInterface
{
    private $type = null;
    private $formatted = false;
    private $separator = "-";

    /**
     * Returns the String of a credit card number.
     *
     * @param string $type      Supporting any of 'Visa', 'MasterCard', 'American Express', 'Discover' and 'JCB'
     * @param bool   $formatted Set to true if the output string should contain one separator every 4 digits
     * @param string $separator Separator string for formatting card number. Defaults to dash (-).
     *
     * @return string
     *
     * @example '4485480221084675'
     */
    public function creditCardNumber($type = null, $formatted = false, $separator = "-", ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->creditCardNumber(
            $this->type,
            $this->formatted,
            $this->separator,
        );
    }

    public function type($type): static
    {
        $this->type = $type;
        return $this;
    }

    public function formatted($formatted): static
    {
        $this->formatted = $formatted;
        return $this;
    }

    public function separator($separator): static
    {
        $this->separator = $separator;
        return $this;
    }

}