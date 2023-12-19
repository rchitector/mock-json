<?php

namespace Rchitector\MockJson\App\Generators;

class Miscellaneous extends \Faker\Provider\Miscellaneous
{
    public static function locales(): array
    {
        return static::$localeData;
    }
}