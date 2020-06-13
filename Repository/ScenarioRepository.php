<?php

namespace Repository;

use App\Algorithm\AlgorithmFactory;
use App\Entity\Scenario;
use App\Exception\ScenarioAlreadyExistsException;

abstract class ScenarioRepository
{
    protected Connection $db;
    protected AlgorithmFactory $algorithmFactory;

    public function __construct(Connection $db, AlgorithmFactory $algorithmFactory)
    {
        $this->db = $db;
        $this->algorithmFactory = $algorithmFactory;
    }

    /**
     * Creates a scenario object
     *
     * @param string $name Scenario name
     * @param array $questions Questions for testing
     * @param array $weight Weight of answer variants for each question
     * @param string $algorithm The name of the algorithm for calculating the results. Used by the algorithm factory
     * @return Scenario
     */
    abstract protected function create(string $name, array $questions, array $weight, string $algorithm): Scenario;

    /**
     * Add new scenario in database
     *
     * @param string $name Unique script name
     * @param array $questions Questions for testing
     * @param array $weight Weight of answer variants for each question
     * @param string $algorithm Algorithm name for calculating results
     * @return int Id of the created scenario
     *
     * @throws ScenarioAlreadyExistsException
     */
    abstract public function add(string $name, array $questions, array $weight, string $algorithm): int;

    /**
     * Finds the scenario in the database and returns its object
     *
     * @param string $name Scenario name
     * @return Scenario|null
     */
    abstract public function findByName(string $name): ?Scenario;
}