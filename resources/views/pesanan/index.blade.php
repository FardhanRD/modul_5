<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Pesanan</title>
</head>

<body>
    <h1>Daftar Pesanan</h1>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Pesanan</th>
                <th>Nama Pelanggan</th>
                <th>Total Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesanan as $pesanan)
            <tr>
                <td>{{ $pesanan->id }}</td>
                <td>{{ $pesanan->tanggal_pesanan }}</td>
                <td>{{ $pesanan->pelanggan->nama }}</td>
                <td>Rp{{ number_format($pesanan->total_harga, 0, ',', '.') }}</td>
                <td>{{ ucfirst($pesanan->status) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>