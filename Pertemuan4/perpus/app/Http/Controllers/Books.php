<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Books extends Controller
{
    function index(){
        return response()->json([
            'message' => 'Get all resources',
        ], 200);
    }
}
