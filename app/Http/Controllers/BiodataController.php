<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;

class BiodataController extends Controller
{
    public function index()
    {
        $biodata = Biodata::all();

        $data = [
            'status' => true,
            'message' => "Data UAS",
            'data'  => $biodata
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $data = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin
        ];

        $biodata = Biodata::create($data);
        if ($biodata) {
            $data = [
                'status' => true,
                'message' => "Berhasil Simpan Data!",
                'data'  => $biodata
            ];

            return response()->json($data, 200);
        } else {
            $data = [
                'status' => false,
                'message' => "Gagal Simpan Data!",
            ];

            return response()->json($data, 500);
        }
    }
}
