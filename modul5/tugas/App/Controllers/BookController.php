<?php

namespace App\Controllers;

use App\Models\Book;
use App\Traits\ApiResponseFormatter;

class BookController
{

    use ApiResponseFormatter;

    public function index()
    {
        $bookModel = new Book;
        $response = $bookModel->findAll();
        return $this->apiResponse(data: $response);
    }

    public function getById($id)
    {
        $bookModel = new Book;
        $response = $bookModel->findById($id);
        return $this->apiResponse(data: $response);
    }

    public function insert()
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        if (json_last_error()) {
            return $this->apiResponse(400, "Bad Request", null);
        }

        $bookModel = new Book;
        $response = $bookModel->create([
            "title" => $inputData["title"],
            "genre_id" => $inputData["genre_id"],
            "author_id" => $inputData["author_id"]
        ]);
        return $this->apiResponse(code: 201, data: $response);
    }

    public function update($id)
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        if (json_last_error()) {
            return $this->apiResponse(400, "Bad Request", null);
        }

        $bookModel = new Book;
        $response = $bookModel->update([
            "title" => $inputData["title"],
            "genre_id" => $inputData["genre_id"],
            "author_id" => $inputData["author_id"]
        ], $id);
        return $this->apiResponse(code: 201, data: $response);
    }

    public function delete($id)
    {
        $bookModel = new Book;
        $response = $bookModel->destroy($id);
        return $this->apiResponse(data: $response);
    }
}
