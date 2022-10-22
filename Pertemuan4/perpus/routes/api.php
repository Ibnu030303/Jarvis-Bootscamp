<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PustakawanController;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Nette\Utils\Json;
use SebastianBergmann\CodeCoverage\Node\CrapIndex;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// CARA 1
// Route::get('/pustakawan', function() {
//     return response()->json([
//         "message" => "hello world"
//      ], 200);
// });

// Cara lebih rapih
// Route untuk menampilkan data pustakawan
Route::get('/pustakawan', [PustakawanController::class, 'index']); 

// Tugas Pertemuan6 membuat route
Route::get('/biodata', [BiodataController::class, 'index']); 

// Get all resource
Route::get('/books', [Bookscontroller::class, 'index']);