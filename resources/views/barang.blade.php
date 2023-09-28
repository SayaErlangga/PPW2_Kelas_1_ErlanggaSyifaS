@yield('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>id Supplier</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_barang as $barang)
            <tr>
                <td>{{ $barang->id_barang }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ "Rp ".number_format($barang->harga, 2, ',', '.') }}</td>
                <td>{{ $barang->id_suplier }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('footer')


