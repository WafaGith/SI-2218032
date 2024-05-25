<?php

namespace App\Http\Controllers;

use App\Models\ModelPenumpang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Penumpang;

class PenumpangController extends Controller
{
    public function index()
    {
        $tb_penumpang = ModelPenumpang::all();
        return view('penumpang.penumpang', compact('tb_penumpang'));
    }
    public function create()
    {
        return view('/penumpang.create-penumpang');
    }
    public function store(Request $request)
    {
        $request->validate([
            'namaPenumpang' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'jenisKelamin' => 'required|string|max:10',
            'noTlp' => 'required|string|max:15',
            'statusPenerbangan' => 'required|string|max:50',
        ]);

        ModelPenumpang::create([
            'namaPenumpang' => $request->namaPenumpang,
            'alamat' => $request->alamat,
            'jenisKelamin' => $request->jenisKelamin,
            'noTelepon' => $request->noTlp,
            'statusPenerbangan' => $request->statusPenerbangan,
        ]);

        return redirect()->route('penumpang')->with('success', 'Penumpang berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $tb_penumpang = ModelPenumpang::find($id);
        return view('penumpang.edit-penumpang', compact('tb_penumpang'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'namaPenumpang' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'jenisKelamin' => 'required|string|max:10',
            'noTlp' => 'required|string|max:15',
            'statusPenerbangan' => 'required|string|max:50',
        ]);

        ModelPenumpang::where('id', $id)->update([
            'namaPenumpang' => $request->namaPenumpang,
            'alamat' => $request->alamat,
            'jenisKelamin' => $request->jenisKelamin,
            'noTelepon' => $request->noTlp,
            'statusPenerbangan' => $request->statusPenerbangan,
        ]);

        return redirect()->route('penumpang')->with('success', 'Penumpang berhasil diubah!');
    }
    public function destroy($id)
    {
        $penumpang = ModelPenumpang::findOrFail($id);
        $penumpang->delete();

        return redirect()->route('penumpang')->with('success', 'Data Penumpang berhasil dihapus!');
    }
    public function exportpdf()
    {
        $penumpang = ModelPenumpang::all();
        $pdf = Pdf::loadview('penumpang.pdf-penumpang', compact('penumpang'));
        return $pdf->stream('data-penumpang.pdf');
    }
}
