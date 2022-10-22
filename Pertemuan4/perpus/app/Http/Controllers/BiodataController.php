<?php

// Tugas Pertemuan6 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    function index() {
        $data = [
            "nama" => "Ibnu Nurdiyansa",
            "gender" => "Laki-Laki",
            "is_student" => True,
            "asal_sekolah" => "SMKN 12 Kabupaten Tangerang",
            "umur" => "19 Tahun",
            "domisili" => "Tangerang"
        ];

        return response()->json($data);
    }
}
