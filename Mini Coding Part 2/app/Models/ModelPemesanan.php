<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'tb_pemesanan';

    protected $primaryKey = 'id_pesan';

    public $timestamps = false;

    protected $fillable = [
        'id_penumpang',
        'id_harga',
        'jam_keberangkatan',
        'jam_kedatangan',
        'bandara_awal',
        'bandara_tujuan'
    ];

    public function penumpang()
    {
        return $this->belongsTo(ModelPenumpang::class, 'id_penumpang');
    }

    public function harga()
    {
        return $this->belongsTo(Harga::class, 'id_harga');
    }
}

