<b>DATA BARANG</b>
<hr>
@foreach ($brg as $index => $isi)
<table>
    <tr>
        <td>ID</td>
        <td>:</td>
        <td>{{ $isi->id }}</td>
    </tr>
    <tr>
        <td>NAMA BARANG</td>
        <td>:</td>
        <td>{{ $isi->nama_barang }}</td>
    </tr>  
    <tr>
        <td>DESKRIPSI</td>
        <td>:</td>
        <td>{{ $isi->deskripsi }}</td>
    </tr>
    <tr>
        <td>STOK</td>
        <td>:</td>
        <td>{{ $isi->stok }}</td>
    </tr>
    <tr>
        <td>HARGA</td>
        <td>:</td>
        <td>{{ $isi->harga }}</td>
    </tr>  
</table>
<a href="{{ route('barang.index') }}">BACK</a>
@endforeach