<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class DayOfWeek extends BaseSimpleGenerator implements GeneratorInterface
{
    private $max = "now";

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     *
     * @return string
     *
     * @example 'Tuesday'
     */
    public function dayOfWeek($max = "now", ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->dayOfWeek(
            $this->max,
        );
    }

    public function max($max): static
    {
        $this->max = $max;
        return $this;
    }

}