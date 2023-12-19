<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class RandomHtml extends BaseSimpleGenerator implements GeneratorInterface
{
    private $maxDepth = 4;
    private $maxWidth = 4;

    /**
     * @param int $maxDepth
     * @param int $maxWidth
     *
     * @return string
     */
    public function randomHtml($maxDepth = 4, $maxWidth = 4, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->randomHtml(
            $this->maxDepth,
            $this->maxWidth,
        );
    }

    public function maxDepth($maxDepth): static
    {
        $this->maxDepth = $maxDepth;
        return $this;
    }

    public function maxWidth($maxWidth): static
    {
        $this->maxWidth = $maxWidth;
        return $this;
    }

}