<?php

namespace Rchitector\MockJson\App\Generators;

class Factory extends \Faker\Factory
{
    public static function defaultProviders(): array
    {
        return [...self::$defaultProviders, 'Base'];
    }
}