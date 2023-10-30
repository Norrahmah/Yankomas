<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_kategori',
        'id_warga',
        'judul',
        'status',
        'nm_sdr_ksa_hkm',
        'pokok',
        'uraian',
        'data_info',
        'hal_dimohon',
        'upload_ttd',
        'upload_bukti',
        'upload_ktp',
        'delstatus',

    ];

    // public function warga()
    // {
    //     return $this->belongsTo(warga::class, "id_warga");
    // }

    public function kategori()
    {
        return $this->belongsTo(kategori::class, "id_kategori");
    }

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'id_warga');
    }

}
