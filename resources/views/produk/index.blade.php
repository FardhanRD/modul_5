<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>
</head>

<body>
    <h1>Daftar Produk</h1>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $produk)
            <tr>
                <td>{{ $produk->id }}</td>
                <td>{{ $produk->nama }}</td>
                <td>Rp{{ number_format($produk->harga, 0, ',', '.') }}</td>
                <td>{{ $produk->stok }}</td>
                <td>{{ $produk->deskripsi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>