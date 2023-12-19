<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class ImageUrl extends BaseSimpleGenerator implements GeneratorInterface
{
    private $width = 640;
    private $height = 480;
    private $category = null;
    private $randomize = true;
    private $word = null;
    private $gray = false;
    private $format = "png";

    /**
     * Generate the URL that will return a random image
     *
     * Set randomize to false to remove the random GET parameter at the end of the url.
     *
     * @example 'http://via.placeholder.com/640x480.png/CCCCCC?text=well+hi+there'
     *
     * @param int         $width
     * @param int         $height
     * @param string|null $category
     * @param bool        $randomize
     * @param string|null $word
     * @param bool        $gray
     * @param string      $format
     *
     * @return string
     */
    public function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false, $format = "png", ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->imageUrl(
            $this->width,
            $this->height,
            $this->category,
            $this->randomize,
            $this->word,
            $this->gray,
            $this->format,
        );
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