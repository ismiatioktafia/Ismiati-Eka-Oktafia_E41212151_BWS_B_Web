<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;


class ApiPendidikanController extends Controller
{
    public function getAll()
    {
        $pendidikan = Pendidikan::all();
        return Response::json($pendidikan, 201);
    }

    public function createPen(Request $request)
    {
        Pendidikan::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Pendidikan Berhasil ditambahkan!'
        ], 201);
    }

    public function updatePen($id, Request $request)
    {
        Pendidikan::find($id)->update($request->all());

        return response()->json([
            'status'=> 'ok',
            'mesage'=> 'Pendidikan berhasil dirubah!'
        ], 201);
    }

    public function deletePen($id)
    {
        Pendidikan::destroy($id);

        return response()->json([
            'status'=> 'ok',
            'message'=> 'Pendidikan berhasil dihapus!'
        ], 201);
    }
}
