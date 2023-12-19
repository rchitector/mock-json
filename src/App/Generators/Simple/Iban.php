<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Iban extends BaseSimpleGenerator implements GeneratorInterface
{
    private $countryCode = null;
    private $prefix = "";
    private $length = null;

    /**
     * International Bank Account Number (IBAN)
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     *
     * @param string $countryCode ISO 3166-1 alpha-2 country code
     * @param string $prefix      for generating bank account number of a specific bank
     * @param int    $length      total length without country code and 2 check digits
     *
     * @return string
     */
    public function iban($countryCode = null, $prefix = "", $length = null, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->iban(
            $this->countryCode,
            $this->prefix,
            $this->length,
        );
    }

    public function countryCode($countryCode): static
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function prefix($prefix): static
    {
        $this->prefix = $prefix;
        return $this;
    }

    public function length($length): static
    {
        $this->length = $length;
        return $this;
    }

}