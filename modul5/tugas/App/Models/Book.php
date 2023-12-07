<?php

namespace App\Models;

use Config\Database;
use PDO;

class Book extends Database
{

    public function findAll()
    {
        $sql = <<<SQL
            SELECT
                b.id,
                b.title,
                a.`name` AS author_name,
                g.`name` AS genre_name
            FROM
                books AS b
                LEFT JOIN genres g ON b.genre_id = g.id
                LEFT JOIN `authors` a ON b.author_id = a.id
        SQL;
        $stmt = $this->connection->query($sql);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM books WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function create($data)
    {
        $sql = "INSERT INTO books (title, genre_id, author_id) VALUES (?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$data["title"], $data["genre_id"], $data["author_id"]]);
    }

    public function update($data, $id)
    {
        $sql = "UPDATE books SET title = ?, genre_id = ?, author_id = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$data["title"], $data["genre_id"], $data["author_id"], $id]);
    }

    public function destroy($id)
    {
        $sql = "DELETE FROM books WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
    }

    public function __destruct()
    {
        $this->connection = null;
    }
}
