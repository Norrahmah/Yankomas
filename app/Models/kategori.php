<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama_kategori',
        'delstatus',

    ];

    public function pengaduan()
    {
        return $this->hasMany(pengaduan::class);
    }
}
 