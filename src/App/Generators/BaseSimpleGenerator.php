<?php

namespace Rchitector\MockJson\App\Generators;

use Faker;
use JsonSerializable;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class BaseSimpleGenerator implements GeneratorInterface, JsonSerializable
{
    protected Faker\Generator $faker;
//    private int $count;

    public function __construct(string $locale)
    {
//        $this->count = $count;
        $this->faker = Faker\Factory::create($locale);
    }

    public function jsonSerialize()
    {
//        if ($this->count > -1) {
//            $items = [];
//            for ($i = 0; $i < $this->count; $i++) {
//                $items[] = $this->generate();
//            }
//            return $items;
//        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        // TODO: Implement generate() method.
        return null;
    }

}