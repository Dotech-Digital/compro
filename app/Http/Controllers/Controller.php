<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function setResponse($status, $message, $data = null)
    {
        return response()->json([
            'success' => $status,
            'message' => $message,
            'data' => $data
        ], 200);
    }
}
