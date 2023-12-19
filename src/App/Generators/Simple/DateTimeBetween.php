<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class DateTimeBetween extends BaseSimpleGenerator implements GeneratorInterface
{
    private $startDate = "-30 years";
    private $endDate = "now";
    private $timezone = null;

    /**
     * Get a DateTime object based on a random date between two given dates.
     * Accepts date strings that can be recognized by strtotime().
     *
     * @param \DateTime|string $startDate Defaults to 30 years ago
     * @param \DateTime|string $endDate   Defaults to "now"
     * @param string|null      $timezone  time zone in which the date time should be set, default to DateTime::$defaultTimezone, if set, otherwise the result of `date_default_timezone_get`
     *
     * @return \DateTime
     *
     * @see http://php.net/manual/en/timezones.php
     * @see http://php.net/manual/en/function.date-default-timezone-get.php
     *
     * @example DateTime('1999-02-02 11:42:52')
     */
    public function dateTimeBetween($startDate = "-30 years", $endDate = "now", $timezone = null, ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->dateTimeBetween(
            $this->startDate,
            $this->endDate,
            $this->timezone,
        );
    }

    public function startDate($startDate): static
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function endDate($endDate): static
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function timezone($timezone): static
    {
        $this->timezone = $timezone;
        return $this;
    }

}