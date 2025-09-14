<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArsipModel extends Model
{
    protected $table = 'arsip';
    protected $fillable = ['nomor','id_kategori','judul','lokasi_file_arsip','waktu_arsip'];
    protected $casts = ['waktu_arsip' => 'datetime'];

    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'id_kategori');
    }
}
