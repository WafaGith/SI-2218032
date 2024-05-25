<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    use HasFactory;

    protected $table = "penumpangs";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'namaPenumpang',
        'alamat',
        'jenisKelamin',
        'noTelepon',
        'statusPenerbangan'
    ];

    // Memberikan nilai default untuk jenisKelamin
    // protected $attributes = [
    //     'jenisKelamin' => 'Laki-Laki'
    // ];
}
