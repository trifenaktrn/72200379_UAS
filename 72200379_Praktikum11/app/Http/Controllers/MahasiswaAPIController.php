<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaAPIController extends Controller
{
    public function all()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Muncul!',
            'data'    => $mahasiswa
        ], 200);
    }

    public function add(Request $request){
        $mahasiswa = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bdg_minat' => $request->bdg_minat,
        ]);

        if ($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Disimpan!',
            ], 200);
        } 
        else {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Disimpan!',
            ], 401);
        }
    }

    public function update(Request $request){
        $mahasiswa = Mahasiswa::whereId($request->id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bdg_minat' => $request->bdg_minat,
        ]);

        if ($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Disimpan!',
            ], 200);
        } 
        else {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Disimpan!',
            ], 401);
        }
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        if ($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Disimpan!',
            ], 200);
        } 
        else {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Disimpan!',
            ], 401);
        }
    }
}
