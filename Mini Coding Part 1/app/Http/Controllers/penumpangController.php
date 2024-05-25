<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penumpang;

class PenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPenumpang = Penumpang::all(); // Menggunakan huruf besar P di awal (Penumpang)
        return view('penumpang.data-penumpang', compact('dtPenumpang')); // Mem-passing variabel dengan huruf besar P (dtPenumpang)
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penumpang.create-penumpang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Penumpang::create([
            'id' => $request->id,
            'namaPenumpang' => $request->namaPenumpang,
            'alamat' => $request->alamat,
            'jenisKelamin' => $request->jenisKelamin,
            'noTelepon' => $request->noTlp,
            'statusPenerbangan' => $request->statusPenerbangan,
        ]);

        return redirect('data-penumpang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $penumpang = Penumpang::findOrFail($id); // Periksa penulisan variabel, gunakan nama variabel yang konsisten
        return view('penumpang.edit-penumpang', compact('penumpang')); // Gunakan nama yang sama dalam compact
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
