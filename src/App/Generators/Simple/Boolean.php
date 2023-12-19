<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Boolean extends BaseSimpleGenerator implements GeneratorInterface
{
    private $chanceOfGettingTrue = 50;

    /**
     * Return a boolean, true or false.
     *
     * @param int $chanceOfGettingTrue Between 0 (always get false) and 100 (always get true)
     *
     * @return bool
     *
     * @example true
     */
    public function boolean($chanceOfGettingTrue = 50, ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->boolean(
            $this->chanceOfGettingTrue,
        );
    }

    public function chanceOfGettingTrue($chanceOfGettingTrue): static
    {
        $this->chanceOfGettingTrue = $chanceOfGettingTrue;
        return $this;
    }

}