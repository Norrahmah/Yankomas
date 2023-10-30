<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use App\Models\kategori;
use App\Models\lampiran;
use App\Models\warga;
use App\Models\status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PengaduanController extends Controller
{
    // public function HalamanInputPengaduan (){
    //     $sspengaduan = kategori::all();
       
    //     return view('hal_user.input_pengaduan',compact('sspengaduan'));
    // } 

    public function HalamanStatusPengaduan (){
        $sts=pengaduan ::all();
        return view('hal_user.hal_status',compact('sts'));
    }

    public function HalamanDataPengaduan (Request $request){

        if($request->has('search')){
            $dt = pengaduan::with('kategori')->where('nama','LIKE','%'.$request->search.'%')
            ->orWhere('tanggal','LIKE','%'.$request->search.'%')
            ->orWhere('judul','LIKE','%'.$request->search.'%')
            ->orWhere('id_kategori','LIKE','%'.$request->search.'%')
            ->latest()->get();

        }else{

            $dt = pengaduan::with('kategori')->where('delstatus','=',1)->latest()->get();
        }
        
        return view('hal_admin.data_pengaduan',compact('dt'));
    }

    public function HalamanArsipPengaduan (Request $request){
        
        if($request->has('search')){
            $ars = pengaduan::with('kategori','warga')->where('nama','LIKE','%'.$request->search.'%')
            ->orWhere('tanggal','LIKE','%'.$request->search.'%')
            ->orWhere('judul','LIKE','%'.$request->search.'%')
            ->orWhere('id_kategori','LIKE','%'.$request->search.'%')
            ->latest()->get();

        }else{

            $ars = pengaduan::with('kategori','warga')->where('delstatus','=',1)->latest()->get();
        }
            return view('hal_admin.arsip_pengaduan',compact('ars'));
    }

    public function HalamanLihatPengaduan (){
        return view('hal_admin.lihat_pengaduan');
    }


    public function TampilHalamanUpdatePengaduan($id)
    {
     
        $upengaduan = pengaduan::findOrfail($id);
        return view ('hal_admin.update_pengaduan',compact('upengaduan'));
    }

    public function SimpanPerubahanPengaduan(Request $request, $id)
    {
        $spengaduan = pengaduan::findOrfail($id);

        $data = [
            'status'=> $request->status,
        ];

        $spengaduan->update($data);
        return redirect('arsip_pengaduan');

      
    }

    public function HapusPengaduan($id)
    {
        $hpengaduan = pengaduan::findOrfail($id);
        $hapus = ['delstatus' => false,];
        $hpengaduan->update($hapus);
        return back();
    }

    public function singleLihatPengaduan($id){
        $single = pengaduan::with('warga')->where([
            ['delstatus','=',true],
            ['id', '=', $id]
        ])->first();

        return view('hal_admin.lihat_pengaduan', compact('single'));
    }
}



