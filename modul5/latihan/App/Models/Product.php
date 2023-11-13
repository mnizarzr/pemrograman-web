<?php

namespace App\Models;

use Config\Database;

class Product extends Database
{

    public  function findAll()
    {
        $sql = "SELECT * FROM products";
        $result = $this->connection->query($sql);
        $this->connection->close();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    public  function findById($id)
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $this->connection->close();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    public  function first($id)
    {
        $sql = "SELECT * FROM products WHERE id = ? LIMIT 1";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $this->connection->close();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data[0];
    }

    public  function create($data)
    {
        $sql = "INSERT INTO products (product_name) VALUES (?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("s", $data["product_name"]);
        $stmt->execute();
        $this->connection->close();
    }

    public  function update($data, $id)
    {
        $sql = "UPDATE products SET product_name = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("si", $data["product_name"], $id);
        $stmt->execute();
        $this->connection->close();
    }

    public  function destroy($id)
    {
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $this->connection->close();
    }
}
