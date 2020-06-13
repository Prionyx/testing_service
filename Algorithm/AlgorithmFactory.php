<?php

namespace App\Algorithm;

abstract class AlgorithmFactory
{
    public function create(string $algorithmName)
    {
        $className = $this->getClass($algorithmName);
        return new $className;
    }

    /**
     * Gets full classname of the algorithm
     *
     * @param string $algorithmName
     * @return string
     * @throws AlgorithmNotFoundException
     */
    function getClass(string $algorithmName): string
    {
        $class = '\App\\' . ucfirst($algorithmName);
        if (!class_exists($class)) {
            throw new AlgorithmNotFoundException();
        }
        return $class;
    }
}