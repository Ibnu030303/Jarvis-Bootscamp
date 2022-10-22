<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    function index() {
        $data = [
            "name" => "Ibnu",
            "Gender" => "L",
            "shift" => "malam", 
        ];

        return response()->json($data);
    }
}
