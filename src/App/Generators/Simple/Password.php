<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Password extends BaseSimpleGenerator implements GeneratorInterface
{
    private $minLength = 6;
    private $maxLength = 20;

    /**
     * @example 'fY4èHdZv68'
     *
     * @return string
     */
    public function password($minLength = 6, $maxLength = 20, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->password(
            $this->minLength,
            $this->maxLength,
        );
    }

    public function minLength($minLength): static
    {
        $this->minLength = $minLength;
        return $this;
    }

    public function maxLength($maxLength): static
    {
        $this->maxLength = $maxLength;
        return $this;
    }

}