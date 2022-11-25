<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\BookController;
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
// Route::get('/pustakawan', [PustakawanController::class, 'index']); 

// Tugas Pertemuan6 membuat route
Route::get('/biodata', [BiodataController::class, 'index']); 

// Tugas membuat Get all resource pustakawan
Route::get('/pustakawan', [PustakawanController::class, 'index']);

// add all resource pustakawan
Route::post('/pustakawan', [PustakawanController::class, 'store']);

// get detail resource pustakawan
Route::get('/pustakawan/{id}', [PustakawanController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
        // Get all resource
    Route::get('/books', [BookController::class, 'index']);

    // add all resource
    Route::post('/books', [BookController::class, 'store']);

    // get detail resource
    Route::get('/books/{id}', [BookController::class, 'show']);

    // edit resource
    Route::put('books/{id}', [BookController::class, 'update']);

    // update resource pustakawan
    Route::put('/pustakawan/{id}', [PustakawanController::class, 'update']);

    // delete rosurce
    Route::delete('/books/{id}', [BookController::class, 'destroy']);

    // search resource by title
    Route::get('/books/search/{title}', [BookController::class, 'search']);

    // delete resource pustakwan
    Route::delete('/pustakawan/{id}', [PustakawanController::class, 'destroy']);

    // search reosurce by name pustakwan
    Route::get('/pustakawan/search/{name}', [PustakawanController::class, 'search']);

});

// register
Route::post('/register', [AuthController::class, 'register']);

// login
Route::post('/login', [AuthController::class, 'login']);