<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangs extends Model
{
    protected $fillable = ['nama', 'id_kategori', 'qty', 'harga_beli', 'harga_jual'];
    protected $table = 'barangs';
}
