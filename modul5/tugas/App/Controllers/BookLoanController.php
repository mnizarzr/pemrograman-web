<?php

namespace App\Controllers;

use App\Models\BookLoan;
use App\Traits\ApiResponseFormatter;

class BookLoanController
{

    use ApiResponseFormatter;

    public function index()
    {
        $bookLoanModel = new BookLoan;
        $response = $bookLoanModel->findAll();
        return $this->apiResponse(data: $response);
    }

    public function getById($id)
    {
        $bookLoanModel = new BookLoan;
        $response = $bookLoanModel->findById($id);
        return $this->apiResponse(data: $response);
    }

    public function insert()
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        if (json_last_error()) {
            return $this->apiResponse(400, "Bad Request", null);
        }

        $bookLoanModel = new BookLoan;
        $response = $bookLoanModel->create([
            "user_id" => $inputData["user_id"],
            "book_id" => $inputData["book_id"],
            "loan_date" => $inputData["loan_date"],
            "return_date" => $inputData["return_date"]
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

        $bookLoanModel = new BookLoan;
        $response = $bookLoanModel->update([
            "user_id" => $inputData["user_id"],
            "book_id" => $inputData["book_id"],
            "loan_date" => $inputData["loan_date"],
            "return_date" => $inputData["return_date"]
        ], $id);
        return $this->apiResponse(code: 201, data: $response);
    }

    public function delete($id)
    {
        $bookLoanModel = new BookLoan;
        $response = $bookLoanModel->destroy($id);
        return $this->apiResponse(data: $response);
    }
}
