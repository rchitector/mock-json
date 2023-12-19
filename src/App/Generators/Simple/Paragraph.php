<?php declare(strict_types=1);

namespace Rchitector\MockJson\App\Generators\Simple;

use Rchitector\MockJson\App\Generators\BaseSimpleGenerator;
use Rchitector\MockJson\App\Interfaces\GeneratorInterface;

class Paragraph extends BaseSimpleGenerator implements GeneratorInterface
{
    private $nbSentences = 3;
    private $variableNbSentences = true;

    /**
     * Generate a single paragraph
     *
     * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
     *
     * @param int  $nbSentences         around how many sentences the paragraph should contain
     * @param bool $variableNbSentences set to false if you want exactly $nbSentences returned,
     *                                  otherwise $nbSentences may vary by +/-40% with a minimum of 1
     *
     * @return string
     */
    public function paragraph($nbSentences = 3, $variableNbSentences = true, ): mixed
    {
        foreach (get_object_vars($this) as $property => $defaultValue) {
            $this->{$property} = $$property ?? $defaultValue;
        }
        return $this->generate();
    }

    public function generate(): mixed
    {
        return $this->faker->paragraph(
            $this->nbSentences,
            $this->variableNbSentences,
        );
    }

    public function nbSentences($nbSentences): static
    {
        $this->nbSentences = $nbSentences;
        return $this;
    }

    public function variableNbSentences($variableNbSentences): static
    {
        $this->variableNbSentences = $variableNbSentences;
        return $this;
    }

}