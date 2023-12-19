<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class RgbaCssColor extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example 'rgba(0,255,122,0.8)'
     *
     * @return string
     */
    public function rgbaCssColor(): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->rgbaCssColor(
        );
    }

}