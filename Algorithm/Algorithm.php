<?php

namespace App\Algorithm;

abstract class Algorithm
{
    protected array $weight;

    /**
     * Method for calculating testing results
     *
     * @param array $results Array of selected answers
     * @return int General test score
     */
    abstract public function calculate(array $results): int;

    /**
     * Return weight issues. Questions without weight will not be taken into account when calculating the result.
     *
     * @param array $questions
     * @return array General test score
     */
    abstract public function setWeight(array $questions): array ;
}