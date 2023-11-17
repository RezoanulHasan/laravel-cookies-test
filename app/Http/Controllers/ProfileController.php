<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
       
        $name = "Donald Trump";
        $age = "75";

        // Create data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set cookie
        $cookie = Cookie::make('access_token', '123-XYZ', 1, '/', $_SERVER['SERVER_NAME'], false, true);

        // just Return response with data and cookie
        return response()->json($data)->cookie($cookie)->setStatusCode(200);
    }
}
