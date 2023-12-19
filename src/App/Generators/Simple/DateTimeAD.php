<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class DateTimeAD extends BaseSimpleGenerator implements GeneratorInterface
{
    private $max = "now";
    private $timezone = null;

    /**
     * Get a datetime object for a date between January 1, 001 and now
     *
     * @param \DateTime|int|string $max      maximum timestamp used as random end limit, default to "now"
     * @param string|null          $timezone time zone in which the date time should be set, default to DateTime::$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     *
     * @return \DateTime
     *
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     *
     * @example DateTime('1265-03-22 21:15:52')
     */
    public function dateTimeAD($max = "now", $timezone = null, ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->dateTimeAD(
            $this->max,
            $this->timezone,
        );
    }

    public function max($max): static
    {
        $this->max = $max;
        return $this;
    }

    public function timezone($timezone): static
    {
        $this->timezone = $timezone;
        return $this;
    }

}