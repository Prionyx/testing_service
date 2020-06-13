<?php

namespace App\Entity;

abstract class Question
{

    /**
     * @var string Question name
     */
    protected string $name;

    /**
     * @var array An array of answer variants and weights with default values
     */
    protected array $variants;

    /**
     * @var string Question text
     */
    protected string $description;

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns a description of the question
     *
     * @return string
     */
    abstract public function getDescription(): string;

    /**
     * Returns an array of variants
     *
     * @return array [variant name => variant weight]
     */
    abstract public function getVariants(): array;

    /**
     * Assigns weight to answer variants
     *
     * @param array $weight
     * @return void
     */
    abstract public function setWeight(array $weight): void;
}