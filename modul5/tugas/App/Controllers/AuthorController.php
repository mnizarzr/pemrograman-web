<?php

namespace App\Controllers;

use App\Models\Author;
use App\Traits\ApiResponseFormatter;

class AuthorController
{

    use ApiResponseFormatter;

    public function index()
    {
        $authorModel = new Author;
        $response = $authorModel->findAll();
        return $this->apiResponse(data: $response);
    }

    public function getById($id)
    {
        $authorModel = new Author;
        $response = $authorModel->findById($id);
        return $this->apiResponse(data: $response);
    }

    public function insert()
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        if (json_last_error()) {
            return $this->apiResponse(400, "Bad Request", null);
        }

        $authorModel = new Author;
        $response = $authorModel->create([
            "name" => $inputData["name"]
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

        $authorModel = new Author;
        $response = $authorModel->update([
            "name" => $inputData["name"]
        ], $id);
        return $this->apiResponse(code: 201, data: $response);
    }

    public function delete($id)
    {
        $authorModel = new Author;
        $response = $authorModel->destroy($id);
        return $this->apiResponse(data: $response);
    }
}
