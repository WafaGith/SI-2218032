<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    use HasFactory;

    protected $table = 'tb_harga';

    protected $primaryKey = 'id_harga';

    public $timestamps = false;

    protected $fillable = [
        'nama_pesawat'
    ];

    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'id_harga');
    }
}
