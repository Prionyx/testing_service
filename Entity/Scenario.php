<?php

namespace App\Entity;

use App\Algorithm\Algorithm;

abstract class Scenario
{
    /**
     * @var Question[]
     */
    protected array $questions;
    protected string $name;
    protected Algorithm $algorithm;
    protected array $weight;

    /**
     * Returns an array with questions and options with an assigned weight of answers
     *
     * @return array
     */
    abstract public function getQuestions(): array;

    /**
     * Returns the result of scoring using the counting algorithm
     *
     * @param array $points [question name => selected variant]
     * @return int Scoring result
     */
    abstract public function getResult(array $points): int;

    /**
     * Assigns weight issues. Questions without weight will not be taken into account when calculating the result.
     * Uses the setWeight method of the algorithm
     *
     * @param Question[] $questions
     * @return Question[]
     */
    abstract protected function setWeight(array $questions): array;
}