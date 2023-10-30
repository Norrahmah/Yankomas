<?php

namespace App\Http\Controllers;

use App\Models\warga;
use App\Models\User;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function HalamanDataDiri (){
        return view('hal_user3.data_diri');
    }

    public function SimpanDataDiri(Request $request)
    {
        warga::create([
        'nama'=> $request->nama,
        'tempat'=> $request->tempat,
        'tgl_lahir'=> $request->tgl_lahir,
        'pekerjaan'=> $request->pekerjaan,
        'agama'=> $request->agama,
        'alamat'=> $request->alamat,
        'telp'=> $request->telp,
        'delstatus'=> true,
    
        ]);
        return redirect('input_pengaduan');
    }


}
