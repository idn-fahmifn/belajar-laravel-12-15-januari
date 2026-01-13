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
                <h1>Selamat Datang!</h1>
                <p>Silakan masukan umur anda dibawah.</p>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">

                @if (session('failed'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Gagal!</strong> {{ session('failed') }}.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                

                @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Gagal!</strong>.

                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>

                        



                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('proses.umur') }}" method="post">
                    @csrf

                    <div class="form-group mt-2">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group mt-2">
                        <label for="">Umur</label>
                        <input type="number" name="umur" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Masuk</button>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
