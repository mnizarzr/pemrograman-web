<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function apiResponse($code = 200, $message = 'success', $data = [])
    {
        return response()->json([
            "code" => $code,
            "message" => $message,
            "data" => $data
        ], $code);
    }
}
