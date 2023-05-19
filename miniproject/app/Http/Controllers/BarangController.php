<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brg= DB::table('barang')->get();
        return view('halaman/barangIndex', compact('brg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Tampilan Create
        return view('halaman/barangcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Simpan Data
        DB::table('barang')->insert([
            'id' => $request->id,
            'nama_barang' => $request->nama_barang,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);

        //jika berhasil kembali ke index
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //menampilkan lebih detail data
        $brg = DB::table('barang')->where('id', $id)->get();
        return view('halaman/barangshow', compact('brg'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit data
        $brg = DB::table('barang')->where('id', $id)->get();
        return view('halaman/barangedit', compact('brg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // update data
        DB::table('barang')->where('id', $id)->update([
            'nama_barang' => $request->nama_barang,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);

        //jika berhasil diubah kembali ke index
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //untuk menghapus data
        DB::table('barang')->where('id', $id)->delete();

        //jika berhasil kembali ke index
        return redirect()->route('barang.index');
    }
}
