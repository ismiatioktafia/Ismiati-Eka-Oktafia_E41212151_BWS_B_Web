
    <b>DATA BARANG</b>
<hr>
<a href="{{ route('barang.create') }}">Tambah Barang</a>
<hr>
    <table border="1" align="center">
        <tr>
            <td>N0</td>
            <td>ID</td>
            <td>NAMA BARANG</td>
            <td>DESKRIPSI</td>
            <td>STOK</td>
            <td>HARGA</td>
        </tr>
        @foreach ($brg as $index => $isi)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $isi->id }}</td>
                <td>{{ $isi->nama_barang }}</td>
                <td>{{ $isi->deskripsi }}</td>
                <td>{{ $isi->stok }}</td>
                <td>{{ $isi->harga }}</td>
                <td>
                    <a href="{{ route('barang.show', $isi->id) }}">Detail</a>
                </td>
                <td>
                    <a href="{{ route('barang.edit', $isi->id) }}">UBAH</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('barang.destroy', $isi->id) }}" style="margin: 0%">
                       @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>