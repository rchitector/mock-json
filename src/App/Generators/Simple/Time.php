<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Time extends BaseSimpleGenerator implements GeneratorInterface
{
    private $format = "H:i:s";
    private $max = "now";

    /**
     * Get a time string (24h format by default)
     *
     * @param string               $format
     * @param \DateTime|int|string $max    maximum timestamp used as random end limit, default to "now"
     *
     * @return string
     *
     * @example '15:02:34'
     */
    public function time($format = "H:i:s", $max = "now", ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->time(
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