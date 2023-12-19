<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class MacAddress extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example '32:F1:39:2F:D6:18'
     *
     * @return string
     */
    public function macAddress(): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->macAddress(
        );
    }

}