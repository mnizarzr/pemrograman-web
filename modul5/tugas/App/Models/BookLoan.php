<?php

namespace App\Models;

use Config\Database;
use PDO;

class BookLoan extends Database
{

    public function findAll()
    {
        $sql = <<<SQL
            SELECT
                books_loans.*,
                books.title AS book_title,
                users.`name` AS user_name
            FROM
                books_loans
                INNER JOIN users ON books_loans.user_id = users.id
                INNER JOIN books ON books_loans.book_id = books.id
        SQL;
        $stmt = $this->connection->query($sql);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM books_loans WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function create($data)
    {
        $sql = "INSERT INTO books_loans (user_id, book_id, loan_date, return_date) VALUES (?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$data["user_id"], $data["book_id"], $data["loan_date"], $data["return_date"]]);
    }

    public function update($data, $id)
    {
        $sql = "UPDATE books_loans SET user_id = ?, book_id = ?, loan_date = ?, return_date = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$data["user_id"], $data["book_id"], $data["loan_date"], $data["return_date"], $id]);
    }

    public function destroy($id)
    {
        $sql = "DELETE FROM books_loans WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$id]);
    }

    public function __destruct()
    {
        $this->connection = null;
    }
}
