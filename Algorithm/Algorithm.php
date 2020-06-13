<?php

namespace App\Algorithm;

abstract class Algorithm
{
    /**
     * Method for calculating testing results
     *
     * @param array $results Array of selected answers
     * @return int General test score
     */
    abstract public function calculate(array $results): int;
}