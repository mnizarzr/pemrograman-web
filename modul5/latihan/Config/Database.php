<?php

namespace Config;

use mysqli;

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

        $this->connection = new mysqli($host, $username, $password, $dbName, $port);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
