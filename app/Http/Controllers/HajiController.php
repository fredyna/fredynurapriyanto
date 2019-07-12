<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Haji;

class HajiController extends Controller
{
    public function index()
    {
        $haji = Haji::all();

        $data = [
            'status' => true,
            'message' => 'Data Haji',
            'data'  => $haji
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
        ];

        $haji = Haji::create($data);
        if ($haji) {
            $data = [
                'status' => true,
                'message' => 'Data berhasil disimpan',
                'data'  => $haji
            ];

            return response()->json($data, 200);
        } else {
            $data = [
                'status' => false,
                'message' => 'Data gagal disimpan',
            ];

            return response()->json($data, 500);
        }
    }
}
