<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class DateTimeInInterval extends BaseSimpleGenerator implements GeneratorInterface
{
    private $date = "-30 years";
    private $interval = "+5 days";
    private $timezone = null;

    /**
     * Get a DateTime object based on a random date between one given date and
     * an interval
     * Accepts date string that can be recognized by strtotime().
     *
     * @param \DateTime|string $date     Defaults to 30 years ago
     * @param string           $interval Defaults to 5 days after
     * @param string|null      $timezone time zone in which the date time should be set, default to DateTime::$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     *
     * @return \DateTime
     *
     * @example dateTimeInInterval('1999-02-02 11:42:52', '+ 5 days')
     *
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     */
    public function dateTimeInInterval($date = "-30 years", $interval = "+5 days", $timezone = null, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->dateTimeInInterval(
            $this->date,
            $this->interval,
            $this->timezone,
        );
    }

    public function date($date): static
    {
        $this->date = $date;
        return $this;
    }

    public function interval($interval): static
    {
        $this->interval = $interval;
        return $this;
    }

    public function timezone($timezone): static
    {
        $this->timezone = $timezone;
        return $this;
    }

}