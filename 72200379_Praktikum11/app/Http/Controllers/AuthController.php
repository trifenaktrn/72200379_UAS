<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{   
    public function user(){
        $user = User::paginate(10);
        return view('user', ['user' => $user], ['cek' => 'user']);
    }

    public function pencarian(Request $request){
        $cari = $request->cari;
        $user = User::where('nama_user', 'like', '%'.$cari.'%')->paginate();
        return view('user',['user' => $user], ['cek' => 'user']);
    }

    public function formuser(){
        return view('formuser', ['cek' => 'user']);
    }

    public function simpanuser(Request $request){
        $user = User::create([
            'nik_user' => $request->nik_user,
            'nama_user' => $request->nama_user,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => md5($request->password)
        ]);
        return redirect("/user")->with('alertcreate', 'Data Tersimpan!');
    }

    public function updateuser($id){
        $user = User::find($id);
        return view('updateuser', ['user' => $user], ['cek' => 'user']);
    }

    public function simpanupdate_user($id, Request $request){
        $user = User::find($id);
        $user->nik_user = $request->nik_user;
        $user->nama_user = $request->nama_user;
        $user->no_hp = $request->no_hp;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->save();
        return redirect('/user')->with('alertupdate', 'Data Berhasil Diubah!');
    }

    public function deleteuser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alertdelete', 'Data Dihapus!');
    }

    public function login(){
        return view('login');
    }

    public function ceklogin(Request $request){
        $user = User::where('email', $request->email)
                  ->where('password',md5($request->password))
                  ->first();
        if ($user){
            Auth::login($user);
            return redirect('/mahasiswa');
        }
        else {
            return redirect('/');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('flash', 'Anda berhasil logout!');
    }
}