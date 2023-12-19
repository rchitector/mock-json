<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class LocalIpv4 extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example '10.1.1.17'
     *
     * @return string
     */
    public function localIpv4(): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->localIpv4(
        );
    }

}