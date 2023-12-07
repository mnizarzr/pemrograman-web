<?php

namespace App\Controllers;

use App\Models\Genre;
use App\Traits\ApiResponseFormatter;

class GenreController
{

    use ApiResponseFormatter;

    public function index()
    {
        $genreModel = new Genre;
        $response = $genreModel->findAll();
        return $this->apiResponse(data: $response);
    }

    public function getById($id)
    {
        $genreModel = new Genre;
        $response = $genreModel->findById($id);
        return $this->apiResponse(data: $response);
    }

    public function insert()
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        if (json_last_error()) {
            return $this->apiResponse(400, "Bad Request", null);
        }

        $genreModel = new Genre;
        $response = $genreModel->create([
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

        $genreModel = new Genre;
        $response = $genreModel->update([
            "name" => $inputData["name"]
        ], $id);
        return $this->apiResponse(code: 201, data: $response);
    }

    public function delete($id)
    {
        $genreModel = new Genre;
        $response = $genreModel->destroy($id);
        return $this->apiResponse(data: $response);
    }
}
