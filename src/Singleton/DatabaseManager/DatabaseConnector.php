<?php

namespace DesignPatterns\Singleton\DatabaseManager;

class DatabaseConnector
{
    private static ?DatabaseConnector $instance = null;

    private string $connection;

    private function __construct() {}

    public static function getInstance(): DatabaseConnector
    {
        if (!self::$instance) {
            self::$instance = new DatabaseConnector();
            self::$instance->makeConnection();
        }

        return self::$instance;
    }

    private function makeConnection(): void
    {
        echo 'Connecting to database...';
        $this->connection = 'CONNECTION';
    }

    public function executeQuery(string $sql): void
    {
        echo 'Executing query: ' . $sql . ' for connection: ' . $this->connection;
    }
}