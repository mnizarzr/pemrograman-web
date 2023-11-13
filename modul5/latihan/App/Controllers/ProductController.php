<?php

namespace App\Controllers;

use App\Models\Product;
use App\Traits\ApiResponseFormatter;

class ProductController
{

    use ApiResponseFormatter;

    public function index()
    {
        $productModel = new Product;
        $response = $productModel->findAll();
        return $this->apiResponse(data: $response);
    }

    public function getById($id)
    {
        $productModel = new Product;
        $response = $productModel->first($id);
        return $this->apiResponse(data: $response);
    }

    public function insert()
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        if (json_last_error()) {
            return $this->apiResponse(400, "Bad Request", null);
        }

        $productModel = new Product;
        $response = $productModel->create([
            "product_name" => $inputData["product_name"]
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

        $productModel = new Product;
        $response = $productModel->update([
            "product_name" => $inputData["product_name"]
        ], $id);
        return $this->apiResponse(code: 201, data: $response);
    }

    public function delete($id)
    {
        $productModel = new Product;
        $response = $productModel->destroy($id);
        return $this->apiResponse(data: $response);
    }
}
