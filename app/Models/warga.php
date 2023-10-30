<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warga extends Model
{
    protected $table = 'warga';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_pengaduan',
        'nama',
        'tempat',
        'tgl_lahir',
        'pekerjaan',
        'agama',
        'alamat',
        'telp',

    ];

    public function pengaduan()
    {
        return $this->hasOne(Pengaduan::class, 'id_warga');
    }

    
}
