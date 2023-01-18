<?php

declare(strict_types=1);

namespace Crutch\Database;

use Crutch\Database\Exception\StorageError;

interface Database
{
    /**
     * @param string $query
     * @param array|null $parameters
     * @return int
     * @throws StorageError
     */
    public function execute(string $query, ?array $parameters = null): int;

    /**
     * @param string $query
     * @param array $parameters
     * @return array|null
     * @throws StorageError
     */
    public function fetch(string $query, array $parameters = []): ?array;

    /**
     * @param string $query
     * @param array $parameters
     * @return array[]
     * @throws StorageError
     */
    public function fetchAll(string $query, array $parameters = []): iterable;

    public function begin(): void;

    public function commit(): void;

    public function rollback(): void;

    public function getDriver(): string;
}
