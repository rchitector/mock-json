<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Address extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example '791 Crist Parks, Sashabury, IL 86039-9874'
     *
     * @return string
     */
    public function address(): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->address(
        );
    }

}