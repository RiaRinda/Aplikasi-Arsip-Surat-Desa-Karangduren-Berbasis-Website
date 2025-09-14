<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori', 'deskripsi'];

    public function arsip()
    {
        return $this->hasMany(ArsipModel::class, 'id_kategori');
    }
}
