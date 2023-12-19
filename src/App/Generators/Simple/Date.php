<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Date extends BaseSimpleGenerator implements GeneratorInterface
{
    private $format = "Y-m-d";
    private $max = "now";

    /**
     * Get a date string between January 1, 1970 and now
     *
     * @param string               $format
     * @param \DateTime|int|string $max    maximum timestamp used as random end limit, default to "now"
     *
     * @return string
     *
     * @example '2008-11-27'
     */
    public function date($format = "Y-m-d", $max = "now", ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->date(
            $this->format,
            $this->max,
        );
    }

    public function format($format): static
    {
        $this->format = $format;
        return $this;
    }

    public function max($max): static
    {
        $this->max = $max;
        return $this;
    }

}