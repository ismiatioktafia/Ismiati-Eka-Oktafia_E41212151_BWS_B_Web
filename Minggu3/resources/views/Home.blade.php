{{-- <!-- Membuat View Sederhana yaitu dengan menampilkan tampilan dibawah 
    apabila route telah memanggil file home dalam view --}}

    
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Halaman Home</h1>
            <p class="lead">Halaman Ini merupakan Halaman Home</p>
        </div>
    </div>
</body>
</html> --}}

@extends('layouts.app') 
{{-- @extends Menghubungkan view ke view master --}}

{{-- @section mendefinisikan sebuah bagian dari isi halaman web --}}
@section('content') 
    <div class="jumbotron jumbotron-fluide">
        <div class="container">
            <h1 class="display-4">Home Page</h1>
            <p class="lead"> This is the Home Page</p>
        </div>
        <p>Nama : {{ $nama }}</p>
        <p>Mata Pelajaran</p>
        <ul>
            @foreach ($pelajaran as $p)
            {{-- foreach adalah perulangan khusus untuk memproses array --}}
            <li>{{ $p }}</li>  
            @endforeach
            {{-- endforeach digunakan untuk menutup blok kode loop foreach --}}
    </div>
@endsection 
{{-- endsection digunakan untuk menutup section --}}