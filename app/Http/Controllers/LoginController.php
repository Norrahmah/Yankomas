<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{

    public function Registrasi (){
        return view('hal_admin3.Registrasi'); 
    }

    public function HalamanPengguna (){
        $pgn = User::where('delstatus','=',1)->latest()->get();
        return view('hal_admin3.Pengguna',compact('pgn'));
    }

    public function HapusPengguna($id){

        $varUsr = User::findOrFail($id);
        $varUsr->delete();
        return redirect('pengguna');
    }

    public function simpanregistrasi(Request $request){
        // dd($request->all());

        User::create([
            'nama' => $request->nama,
            'level' => 'warga',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'delstatus' => true,
        ]);

        return redirect('login');

    }

    public function HalamanLogin (){
        return view('hal_admin3.login');
    }

    public function PostLogin(Request $request)
    {
        if (Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ]
        )) {
            return redirect('beranda');
        }
        return redirect('login');
    }

    public function Logout(){
        Auth::logout();
        return redirect ('login');
    }

}
