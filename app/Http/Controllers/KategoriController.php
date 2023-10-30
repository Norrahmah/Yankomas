<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function HalamanKategori (){
        $ktg = kategori::where('delstatus','=',1)->latest()->get();
        return view('hal_admin2.kategori', compact('ktg'));
    }

    public function TampilTambahKategori (){
        return view('hal_admin2.tambah_kategori');
    }

    public function SimpanKategori(Request $request)
    {
        kategori::create([ 
        'nama_kategori'=> $request->nama_kategori,
        'delstatus'=> true,

        //'id_user'=> Auth()->user()->,

        ]);

        return redirect('kategori');

    }

    public function TampilHalamanUpdateKategori($id)
    {
        $uktg = kategori::findOrfail($id);
        return view ('hal_admin2.update_kategori',compact('uktg'));
    }

    public function SimpanPerubahanKategori(Request $request, $id)
    {
        $skategori = kategori::findOrfail($id);

        $datak = [
        'nama_kategori'=> $request->nama_kategori,
        'delstatus'=> true,
        ];

        $skategori->update($datak);
        return redirect('kategori');
    }

    public function HapusKategori($id)
    {
        $hkategori = kategori::findOrfail($id);
        $hapusk = ['delstatus' => false,];
        $hkategori->update($hapusk);
        return back();
    }
}
