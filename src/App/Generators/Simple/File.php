<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class File extends BaseSimpleGenerator implements GeneratorInterface
{
    private $sourceDirectory = "/tmp";
    private $targetDirectory = "/tmp";
    private $fullPath = true;

    /**
     * Copy a random file from the source directory to the target directory and returns the filename/fullpath
     *
     * @param string $sourceDirectory The directory to look for random file taking
     * @param string $targetDirectory
     * @param bool   $fullPath        Whether to have the full path or just the filename
     *
     * @return string
     */
    public function file($sourceDirectory = "/tmp", $targetDirectory = "/tmp", $fullPath = true, ): static
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this;
    }

    public function generate(): mixed
    {
        return $this->faker->file(
            $this->sourceDirectory,
            $this->targetDirectory,
            $this->fullPath,
        );
    }

    public function sourceDirectory($sourceDirectory): static
    {
        $this->sourceDirectory = $sourceDirectory;
        return $this;
    }

    public function targetDirectory($targetDirectory): static
    {
        $this->targetDirectory = $targetDirectory;
        return $this;
    }

    public function fullPath($fullPath): static
    {
        $this->fullPath = $fullPath;
        return $this;
    }

}