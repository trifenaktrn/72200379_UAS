<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        $mahasiswa = Mahasiswa::paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }

    public function pencarian(Request $request){
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->orWhere('nim', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa',['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }

    public function form_mhs(){
        return view('form_mhs', ['cek' => 'mahasiswa']);
    }

    public function simpanmahasiswa(Request $request){
        $bdg_minat = implode(",", $request->get('bdg_minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bdg_minat' => $bdg_minat
        ]);
        return redirect("/mahasiswa")->with('alertcreate', 'Data Tersimpan!');
    }

    public function updatemhs($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('updatemhs', ['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }

    public function simpanupdate($id, Request $request){
        $bdg_minat = implode(",", $request->bdg_minat);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bdg_minat = $bdg_minat;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('alertupdate', 'Data Berhasil Diubah!');
    }

    public function deletemhs($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('alertdelete', 'Data Dihapus!');
    }
}
