<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
        return view('upload');
    }
    public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        // nama file
        echo 'File Name: '.$file->getClientOriginalName().'<br>';
        // ekstensi file
        echo 'File Ekstension: '.$file->getClientOriginalExtension().'<br>';
        // real path
        echo 'File Real Path: '.$file->getRealPath().'<br>';
        // ukuran file
        echo 'File Size: '.$file->getSize().'<br>';
        // tipe mime
        echo 'File Mime Type: '.$file->getMimeType.'<br>';
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        // upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());
    }
    public function resize_upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);

        //Tentukan path lokasi upload
        $path = public_path('img/logo');

        //jika foldernya belum ada
        if (!File::isDirectory($path)){
            //maka folder tersebut akan dibuat
            File::makeDirectory($path, 0777, true);
        }

        //memanggil file image dari form
        $file = $request->file('file');

        //membuat name file dari gabungan tanggal dan uniqid()
        $fileName = 'logo_'.uniqid(). '.' . $file->getClientOriginalExtension();

        //membuat canvas image sebesar dimensi
        $canvas = Image::canvas(200, 2000);

        //Resize image sesuai dimensi dengan memperthankan ratio
        $resizeImage = Image::make($file)->resize(null, 200, function($constraint){
            $constraint->aspectRatio();
        });

        //membuat iamge yang telah diresize kedalam canvas
        $canvas->insert($resizeImage, 'center');

        //simpan image ke folder
        if($canvas->save($path . '/' . $fileName)){
            return redirect(route('ipload'))->with('success', 'Data berhasil ditambahkan!');
        } else{
            return redirect(route('upload'))->with('error', 'Data gagal ditambahkan!');
        }
    }

    public function dropzone_store(Request $request)
    {
        $image = $request->file('file');

        $imageName = time().'.'.$image->extension();
        $image->move(\public_path('image/dropzone'), $imageName);
        return response()->json(['succes' => $imageName]);
    }
}
