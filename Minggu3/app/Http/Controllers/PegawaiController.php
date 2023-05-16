<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    // public function index($nama){
    //     return $nama;
    // }
    public function index(Request $request){
        return $request->segment(2);
    }

    public function formulir(){
        return view('formulir');
    }
    public function proses(Request $request){
        // $nama = $request->input('nama');
        // $alamat = $request->input('alamat');

        // return "Nama : ".$nama.", Alamat : ".$alamat;

        $message = [
            'required' => 'Input :attribute wajib diisi',
            'min' => 'Input :atribute harus diisi minimal :min karakter!',
            'max' => 'Input :atribute harus diisi maksimal :max karakter!',
        ];

        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'alamat' => 'required|alpha'
        ], $message);

        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
