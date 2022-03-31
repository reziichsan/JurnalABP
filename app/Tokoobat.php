<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tokoobat extends Model
{
    protected $table = "tokoobat";

    protected $fillable = ['Kode','Nama','Deskripsi','Tipe','Jumlah','Harga'];
}