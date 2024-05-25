<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPenumpang extends Model
{
    use HasFactory;
    protected $table = 'penumpang';
    protected $fillable = [
        'namaPenumpang',
        'alamat',
        'jenisKelamin',
        'noTelepon',
        'jenis_kelamin',
        'statusPenerbangan',
    ];
}
