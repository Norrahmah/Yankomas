<?php

use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\LampiranController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StatusController;
use App\Models\kategori;
use App\Models\pengaduan;
use App\Models\warga;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ App\Http\Controllers\TampilanController::class,'Tampilan' ]);
Route::get('/kontak',[ App\Http\Controllers\TampilanController::class,'TampilanKontak' ]);

// Route::get('/pengaduan-awal',[ App\Http\Controllers\TampilanController::class,'TampilanPengaduan' ]);
// Route::post('/simpan_input_pengaduan',[PengaduanController::class, 'SimpanInputPengaduan']);

// Route::get('/data-diri/create/{id_pengaduan}',[ App\Http\Controllers\TampilanController::class,'TampilanDataDiri' ])->name('data-diri.create');
// Route::post('/simpan_data_diri/{id}',[App\Http\Controllers\TampilanController::class, 'SimpanDataDiri']);

Route::get('/pengaduan-awal/create', [App\Http\Controllers\TampilanController::class, 'TampilanPengaduan'])->name('pengaduan.create');
Route::post('/simpan_input_pengaduan/store', [App\Http\Controllers\TampilanController::class, 'SimpanInputPengaduan'])->name('pengaduan.store');

Route::get('/data-diri/create/{id}', [App\Http\Controllers\TampilanController::class, 'TampilanDataDiri'])->name('datadiri.create');
Route::post('/data-diri/store/{id}', [App\Http\Controllers\TampilanController::class, 'SimpanDataDiri'])->name('datadiri.store');



//login register
Route::get('/registrasi',[LoginController::class, 'Registrasi'])->name('registrasi');
Route::post('/simpan-registrasi',[LoginController::class, 'simpanregistrasi'])->name('simpan-registrasi');

Route::get('/login',[ LoginController::class,'HalamanLogin' ])->name('login');
Route::post('/post_login',[ LoginController::class,'PostLogin' ])->name('post_login');
Route::get('/logout',[ LoginController::class,'Logout' ]);


Route::group(['middleware'=>['auth','ceklevel:Admin,warga']], function(){ 

Route::get('/beranda', function () {
        if (auth()->user()->level === 'Admin') {
                return view('welcome'); // Ganti dengan nama view halaman admin.
        } elseif (auth()->user()->level === 'warga') {
                $s = pengaduan ::with('warga')->get();
                return view('halaman_awal.status', compact('s')); // Ganti dengan nama view halaman warga.
}
});


Route::get('/status',[ App\Http\Controllers\TampilanController::class,'TampilanStatus' ]);


// Route::get('/beranda', function () {
//         return view('welcome');
// });


//user input pengaduan
Route::get('/input_pengaduan',[PengaduanController::class, 'HalamanInputPengaduan']);


//user data diri
Route::get('/data_diri',[WargaController::class, 'HalamanDataDiri']);


//user hal status
Route::get('/hal_status',[PengaduanController::class, 'HalamanStatusPengaduan']);

});

Route::group(['middleware'=>['auth','ceklevel:Admin']], function(){ 

//halaman data pengaduan, halaman arsip pengaduan, halaman lihat pengaduan
Route::get('/data_pengaduan',[PengaduanController::class, 'HalamanDataPengaduan']);
Route::get('/arsip_pengaduan',[PengaduanController::class, 'HalamanArsipPengaduan']);
Route::get('/lihat_pengaduan',[PengaduanController::class, 'HalamanLihatPengaduan']);
Route::get('/lihat-pengaduan-{id}', [ PengaduanController::class,'singleLihatPengaduan' ]);

//admin
Route::get('/update_pengaduan/{id}',[PengaduanController::class, 'TampilHalamanUpdatePengaduan']);
Route::post('/simpan_perubahan_pengaduan/{id}',[PengaduanController::class, 'SimpanPerubahanPengaduan']);
Route::get('/hapus_pengaduan/{id}',[PengaduanController::class, 'HapusPengaduan']);


//admin kategori
Route::get('/kategori',[KategoriController::class, 'HalamanKategori']);
Route::get('/tambah_kategori',[KategoriController::class, 'TampilTambahKategori']);
Route::post('/simpan_kategori',[KategoriController::class, 'SimpanKategori']);
Route::get('/update_kategori/{id}',[KategoriController::class, 'TampilHalamanUpdateKategori']);
Route::post('/simpan_perubahan_kategori/{id}',[KategoriController::class, 'SimpanPerubahanKategori']);
Route::get('/hapus_kategori/{id}',[KategoriController::class, 'HapusKategori']);

//data pengguna
Route::get('/pengguna',[LoginController::class, 'HalamanPengguna']);
Route::get('/hapus-pengguna/{id}',[LoginController::class, 'HapusPengguna']);

});