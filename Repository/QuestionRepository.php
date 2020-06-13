<?php

namespace Repository;

use App\Entity\Question;

abstract class QuestionRepository
{
    protected Connection $db;

    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Creates a question object
     *
     * @param string $name
     * @param string $description
     * @param array $variants
     * @return Question
     */
    abstract protected function create(string $name, string $description, array $variants): Question;

    /**
     * Add new question in database
     *
     * @param string $name Unique question name
     * @param string $description
     * @param array $variants
     * @return int Id of the created question
     *
     */
    abstract public function add(string $name, string $description, array $variants): int;

    /**
     * Finds the scenario in the database and returns its object
     *
     * @param string $name Question name
     * @return Question|null
     */
    abstract public function findByName(string $name): ?Question;
}