<?php

namespace PulpFiction\DatabaseConnection;

use PulpFiction\core\Model;

interface ResultSetInterface
{
    public function fetchAll(string $className = null): array;

    /**
     * @param string|null $className
     * @return boolean|Model
     */
    public function fetch(string $className = null);

    public function fetchAllAssociative();

    public function fetchColumn();

    public function fetchAllColumns();
}