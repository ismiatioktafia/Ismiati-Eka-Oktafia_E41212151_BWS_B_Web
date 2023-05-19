<b>DATA BARANG</b>
<hr>
<form method="POST" action="{{ route('barang.store') }}">
    @csrf
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>NAMA BARANG</td>
            <td>:</td>
            <td><input type="text" name="nama_barang"></td>
        </tr>
        <tr>
            <td>DESKRIPSI</td>
            <td>:</td>
            <td><input type="text" name="deskripsi"></td>
        </tr>
        <tr>
            <td>STOK</td>
            <td>:</td>
            <td><input type="text" name="stok"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td>:</td>
            <td><input type="text" name="harga"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>