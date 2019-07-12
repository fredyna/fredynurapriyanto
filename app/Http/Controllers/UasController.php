<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UAS;

class UasController extends Controller
{
    public function index()
    {
        $uas = UAS::all();

        $data = [
            'status' => true,
            'message' => "Data UAS",
            'data'  => $uas
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $data = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jam' => $request->jam
        ];

        $uas = UAS::create($data);
        if ($uas) {
            $data = [
                'status' => true,
                'message' => "Berhasil Simpan Data!",
                'data'  => $uas
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
