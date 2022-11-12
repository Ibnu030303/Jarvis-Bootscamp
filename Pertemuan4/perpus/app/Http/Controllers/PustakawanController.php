<?php

namespace App\Http\Controllers;

use App\Models\Pustakawan;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    // function index() {
    //     $data = [
    //         "name" => "Ibnu",
    //         "Gender" => "L",
    //         "shift" => "malam", 
    //     ];

    //     return response()->json($data);
    // }

    function index() {
        $pustakawans = Pustakawan::all();

        //send 204 if no data 
        if(count($pustakawans) == 0) {
            return response()->json([
                'message' => 'Get all resources',
                'status' => 204,
            ], 204);
        }

        return response()->json([
            'message' => 'Get all resources',
            'status' => 200,
            'data' => $pustakawans
        ]);
    }

    function store(Request $request) {

        $created  = Pustakawan::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'shift' => $request->shift,
            
        ]);

        return response()->json([
            'message' => 'Reseousce berhasil',
            'status' => 201,
            'data' => $created, 
        ], 201);
    }

    function show($id){
        $pustakawans = Pustakawan::find($id);

        // jika id tidak di temukan
        if(!$pustakawans) {
            return response()->json([
                'message' => 'resources not found',
                'status' => 404,
            ], 404);
        }

        // return pustakawan resource
        return response()->json([
            'message' => 'Get detail resource',
            'status' => 200,
            'data' => $pustakawans
        ], 200);
    }

    function update ($id, Request $request) {

        $pustakawans = Pustakawan::find($id);

        // jika id tidak di temukan
        if(!$pustakawans) {
            return response()->json([
                'message' => 'id tidak di temukan',
                'status' => 404,
                'data' => $pustakawans
            ], 200);
        }

        $update = $pustakawans->update ([
            'name' => $request->name ?? $pustakawans->name,
            'gender' => $request->gender ?? $pustakawans->gender,
            'shift' => $request->shift ?? $pustakawans->shift,
        ]);

        if($update) {
            return response()->json([
                'message' => 'data berhasil di update',
                'data' => $update,
                'status' => 200
            ], 200);
        }
    }

    function destroy ($id) {
        $pustakawans = Pustakawan::find($id);

        // jika id tidak di temukan
        if(!$pustakawans) {
            return response()->json([
                'message' => 'resources not found',
                'status' => 404,
            ], 404);
        }

        $deleted = $pustakawans->delete();

        if($deleted) {
            return response()->json([
                'message' => 'Data berhasail DI Delet',
                'status' => 200
            ], 200);
        }
    }

    function search ($name) {

        $pustakawans = Pustakawan::where('name', 'like', '%'.$name.'%')->get();

        if(count($pustakawans) == 0) {
            return response()->json([
                'message' => 'resources is empety',
                'status' => 404,
            ], 404);
        }

        return response()->json([
            'message' => 'resource berhasil',
            'data' => $pustakawans,
            'status' => 200
        ], 200);
    }
}
