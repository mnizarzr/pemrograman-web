<?php

namespace App\Controllers;

use App\Models\User;
use App\Traits\ApiResponseFormatter;

class UserController
{

    use ApiResponseFormatter;

    public function index()
    {
        $userModel = new User;
        $response = $userModel->findAll();
        return $this->apiResponse(data: $response);
    }

    public function getById($id)
    {
        $userModel = new User;
        $response = $userModel->findById($id);
        return $this->apiResponse(data: $response);
    }

    public function insert()
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        if (json_last_error()) {
            return $this->apiResponse(400, "Bad Request", null);
        }

        $userModel = new User;
        $response = $userModel->create([
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

        $userModel = new User;
        $response = $userModel->update([
            "name" => $inputData["name"]
        ], $id);
        return $this->apiResponse(code: 201, data: $response);
    }

    public function delete($id)
    {
        $userModel = new User;
        $response = $userModel->destroy($id);
        return $this->apiResponse(data: $response);
    }
}
