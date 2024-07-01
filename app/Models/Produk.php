<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_produk', 'harga', 'kategori', 'stok', 'gambar'];
    public $timestamps = true;

    public function Product()
    {
        return $this->hasMany(Product::class);
    }

    public function deleteImage(){
        if($this->cover && file_exists(public_path('images/produk'. $this->cover)))
        {unlink(public_path('images/produk'. $this->cover));
        }
    }
}
