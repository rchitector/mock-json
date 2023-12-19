<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Image extends BaseSimpleGenerator implements GeneratorInterface
{
    private $dir = null;
    private $width = 640;
    private $height = 480;
    private $category = null;
    private $fullPath = true;
    private $randomize = true;
    private $word = null;
    private $gray = false;
    private $format = "png";

    /**
     * Download a remote random image to disk and return its location
     *
     * Requires curl, or allow_url_fopen to be on in php.ini.
     *
     * @example '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.png'
     *
     * @return bool|string
     */
    public function image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null, $gray = false, $format = "png", ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->image(
            $this->dir,
            $this->width,
            $this->height,
            $this->category,
            $this->fullPath,
            $this->randomize,
            $this->word,
            $this->gray,
            $this->format,
        );
    }

    public function dir($dir): static
    {
        $this->dir = $dir;
        return $this;
    }

    public function width($width): static
    {
        $this->width = $width;
        return $this;
    }

    public function height($height): static
    {
        $this->height = $height;
        return $this;
    }

    public function category($category): static
    {
        $this->category = $category;
        return $this;
    }

    public function fullPath($fullPath): static
    {
        $this->fullPath = $fullPath;
        return $this;
    }

    public function randomize($randomize): static
    {
        $this->randomize = $randomize;
        return $this;
    }

    public function word($word): static
    {
        $this->word = $word;
        return $this;
    }

    public function gray($gray): static
    {
        $this->gray = $gray;
        return $this;
    }

    public function format($format): static
    {
        $this->format = $format;
        return $this;
    }

}