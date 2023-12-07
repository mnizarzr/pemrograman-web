<?php

namespace Config;

use PDO;

class Database
{
    protected $connection;

    public function __construct()
    {
        $host = config('database.mysql.host', '127.0.0.1');
        $port = config('database.mysql.port', 3306);
        $username = config('database.mysql.user', 'root');
        $password = config('database.mysql.password', 'root');
        $dbName = config('database.mysql.db_name', 'pwmodul5');

        $dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=utf8mb4";

        try {
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
