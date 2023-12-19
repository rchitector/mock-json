<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class RgbCssColor extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example 'rgb(0,255,122)'
     *
     * @return string
     */
    public function rgbCssColor(): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->rgbCssColor(
        );
    }

}