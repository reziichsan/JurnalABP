<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Toko Obat - Rezi</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Toko Obat Rezi - 1301194062
                </div>
                <div class="card-body">
                    <a href="/tokoobat/tambah" class="btn btn-primary">Tambah Obat Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Tipe</th>
                                <th>Jumlah</th>
                                <th>Harga Satuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tokoobat as $p)
                            <tr>
                                <td>{{ $p->Kode }}</td>
                                <td>{{ $p->Nama }}</td>
                                <td>{{ $p->Deskripsi }}</td>
                                <td>{{ $p->Tipe }}</td>
                                <td>{{ $p->Jumlah }}</td>
                                <td>{{ $p->Harga}}</td>
                                <td>
                                    <a href="/tokoobat/edit/{{ $p->Kode }}" class="btn btn-warning">Edit</a>
                                    <a href="/tokoobat/hapus/{{ $p->Kode }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>