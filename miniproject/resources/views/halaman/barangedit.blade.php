<b>DATA BARANG</b>
<hr>
@foreach ($brg as $index => $isi)
<form method="POST" action="{{ route('barang.update', $isi->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="text" name="id" value="{{ $isi->id }}" disabled></td>
        </tr>
        <tr>
            <td>NAMA BARANG</td>
            <td>:</td>
            <td><input type="text" name="nama_barang" value="{{ $isi->nama_barang }}"></td>
        </tr>
        <tr>
            <td>DESKRIPSI</td>
            <td>:</td>
            <td><input type="text" name="deskrisp" value="{{ $isi->deskripsi }}"></td>
        </tr>
        <tr>
            <td>STOK</td>
            <td>:</td>
            <td><input type="text" name="stok" value="{{ $isi->stok }}"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td>:</td>
            <td><input type="text" name="harga" value="{{ $isi->harga }}"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>
@endforeach