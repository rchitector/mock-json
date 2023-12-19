<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class FreeEmailDomain extends BaseSimpleGenerator implements GeneratorInterface
{

    /**
     * @example 'gmail.com'
     *
     * @return string
     */
    public function freeEmailDomain(): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->freeEmailDomain(
        );
    }

}