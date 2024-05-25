<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenumpangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penumpangs')->insert([
            'namaPenumpang' =>'Muhammad',
            'alamat' =>'Jember',
            'jenisKelamin' =>'Laki-Laki',
            'noTelepon' =>'0859891878982',
            'statusPenerbangan' =>'Berhasil'
        ]);
    }
}
