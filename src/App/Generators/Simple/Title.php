<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Title extends BaseSimpleGenerator implements GeneratorInterface
{
    private $gender = null;

    /**
     * @example 'Mrs.'
     *
     * @param string|null $gender 'male', 'female' or null for any
     *
     * @return string
     */
    public function title($gender = null, ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->title(
            $this->gender,
        );
    }

    public function gender($gender): static
    {
        $this->gender = $gender;
        return $this;
    }

}