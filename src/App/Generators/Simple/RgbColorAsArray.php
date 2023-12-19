<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class RgbColorAsArray extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example 'array(0,255,122)'
     *
     * @return array
     */
    public function rgbColorAsArray(): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->rgbColorAsArray(
        );
    }

}