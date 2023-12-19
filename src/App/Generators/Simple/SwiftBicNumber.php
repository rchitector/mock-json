<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class SwiftBicNumber extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * Return the String of a SWIFT/BIC number
     *
     * @example 'RZTIAT22263'
     *
     * @see    http://en.wikipedia.org/wiki/ISO_9362
     *
     * @return string Swift/Bic number
     */
    public function swiftBicNumber(): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->swiftBicNumber(
        );
    }

}