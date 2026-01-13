<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form umur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h1>Data Barang</h1>
                <p>Berikut adalah data barang yang tersedia.</p>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Nama Barang </td>
                                <td>{{ $data->nama_barang }} </td>
                            </tr>
                            <tr>
                                <td>Merk </td>
                                <td>{{ $data->brand }} </td>
                            </tr>
                            <tr>
                                <td>Stok </td>
                                <td>{{ $data->stok }} </td>
                            </tr>
                            <tr>
                                <td>Deskripsi </td>
                                <td>{{ $data->deskripsi }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
