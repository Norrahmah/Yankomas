<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\warga;
use App\Models\pengaduan;
use Illuminate\Http\Request;

class TampilanController extends Controller
{
    public function Tampilan(){

        return view('Tampilan_Awal');
    }

    public function TampilanPengaduan(){
        $sspengaduan = kategori::all();

        return view('Halaman_Awal.Pengaduan',compact('sspengaduan'));
    }

    public function SimpanInputPengaduan(Request $request)
    {
        $request->validate([
            'upload_ttd' =>'required|file|mimes:pdf,doc,jpg,png,jpeg,docx|max:2048',
            'upload_bukti' =>'required|file|mimes:pdf,doc,jpg,png,jpeg,docx|max:2048',
            'upload_ktp' =>'required|file|mimes:pdf,doc,jpg,png,jpeg,docx|max:2048',
        ]);
    
        $doc = $request->file('upload_ttd');
        $doc1 = $request->file('upload_bukti');
        $doc2 = $request->file('upload_ktp');
    
        $nmdoc = time().rand(100,999).'.'.$request->file('upload_ttd')->getClientOriginalExtension();
        $nmdoc1 = time().rand(100,999).'.'.$request->file('upload_bukti')->getClientOriginalExtension();
        $nmdoc2 = time().rand(100,999).'.'.$request->file('upload_ktp')->getClientOriginalExtension();
    
        $doc->move(public_path().'/lampiran',$nmdoc);
        $doc1->move(public_path().'/lampiran',$nmdoc1);
        $doc2->move(public_path().'/lampiran',$nmdoc2);
    
        $pengaduan = pengaduan::create([
            'id_kategori'=>$request->id_kategori,
            'judul'=> $request->judul,
            'status'=> 'Pending',
            'nm_sdr_ksa_hkm'=> $request->nm_sdr_ksa_hkm,
            'pokok'=> $request->pokok,
            'uraian'=> $request->uraian,
            'data_info'=> $request->data_info,
            'hal_dimohon'=> $request->hal_dimohon,
            'upload_ttd' => $nmdoc,
            'upload_bukti' => $nmdoc1,
            'upload_ktp' => $nmdoc2,
            'delstatus'=> true,
        ]);
    
        // Arahkan pengguna ke halaman untuk mengisi data diri
        return redirect()->route('datadiri.create', ['id' => $pengaduan->id]);
    }

    public function TampilanDataDiri($id_pengaduan)
    {
        // Ambil data pengaduan berdasarkan $id_pengaduan
        $pengaduan = pengaduan::findOrFail($id_pengaduan);
    
        // Tampilkan formulir untuk mengisi data diri
        return view('Halaman_Awal.pengaduan1', compact('pengaduan'));
    }

    public function SimpanDataDiri(Request $request, $id_pengaduan)
{
    $pengaduan = pengaduan::findOrFail($id_pengaduan);

    $warga = new Warga([
        'id_pengaduan' => $pengaduan->id,
        'nama' => $request->nama,
        'tempat' => $request->tempat,
        'tgl_lahir' => $request->tgl_lahir,
        'pekerjaan' => $request->pekerjaan,
        'agama' => $request->agama,
        'alamat' => $request->alamat,
        'telp' => $request->telp,
    ]);

    $warga->save();

    // Menambahkan id_warga ke pengaduan
    $pengaduan->id_warga = $warga->id;
    $pengaduan->save();

    return redirect('/');
}



    public function TampilanStatus(){
        $s = pengaduan ::with('warga')->get();

        return view('Halaman_Awal.status',compact('s'));
    }

    public function TampilanKontak(){

        return view('Halaman_Awal.kontak');
    }

}
