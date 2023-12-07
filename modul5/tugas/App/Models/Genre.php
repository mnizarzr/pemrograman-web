<?php

namespace App\Models;

use Config\Database;
use PDO;

class Genre extends Database
{

    public function findAll()
    {
        $sql = "SELECT * FROM genres";
        $stmt = $this->connection->query($sql);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM genres WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function create($data)
    {
        $sql = "INSERT INTO genres (name) VALUES (?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$data["name"]]);
    }

    public function update($data, $id)
    {
        $sql = "UPDATE genres SET name = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$data["name"], $id]);
    }

    public function destroy($id)
    {
        $sql = "DELETE FROM genres WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
    }

    public function __destruct()
    {
        $this->connection = null;
    }
}
