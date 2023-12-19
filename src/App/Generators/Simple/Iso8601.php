<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Iso8601 extends BaseSimpleGenerator implements GeneratorInterface
{
    private $max = "now";

    /**
     * get a date string formatted with ISO8601
     *
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return string
     *
     * @example '2003-10-21T16:05:52+0000'
     */
    public function iso8601($max = "now", ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->iso8601(
            $this->max,
        );
    }

    public function max($max): static
    {
        $this->max = $max;
        return $this;
    }

}