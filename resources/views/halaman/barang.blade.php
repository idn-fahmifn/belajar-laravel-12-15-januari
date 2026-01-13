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
                    <table class="table table-striped">
                        <thead>
                            <th>Nama Barang</th>
                            <th>Merk</th>
                            <th>#</th>
                        </thead>

                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->brand }}</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-success">Detail</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Data tidak ada</td>
                                </tr>
                            @endforelse
                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
