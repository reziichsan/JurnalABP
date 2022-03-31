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
                <center><h1>Edit Obat</h1></center>
                <div class="card-body">
                    <a href="/tokoobat" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/tokoobat/update/{{ $tokoobat->Kode }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Kode</label>
                            <input type="text" name="Kode" class="form-control" placeholder="Kode Obat" value=" {{ $tokoobat->Kode }}">

                            @if($errors->has('Kode'))
                                <div class="text-danger">
                                    {{ $errors->first('Kode')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="Nama" class="form-control" placeholder="Nama Obat" value=" {{ $tokoobat->Nama }}">

                            @if($errors->has('Nama'))
                                <div class="text-danger">
                                    {{ $errors->first('Nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="text" name="Deskripsi" class="form-control" placeholder="Deskripsi Obat" value=" {{ $tokoobat->Deskripsi }}"></textarea>

                            @if($errors->has('Deskripsi'))
                                <div class="text-danger">
                                    {{ $errors->first('Deskripsi')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tipe Obat</label>
                            <select name='Tipe Obat'>
		                            <option value='Capsul'>Capsul</option>
		                            <option value='Cair'>Cair</option>
		                            <option value='Tablet'>Tablet</option>
		                            <option value='Bubuk'>Bubuk</option>
	                                </select>

                            @if($errors->has('tipe'))
                                <div class="text-danger">
                                    {{ $errors->first('tipe')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="Jumlah" class="form-control" placeholder="Jumlah Obat." value="{{ $tokoobat->Jumlah }}">

                             @if($errors->has('jumlah'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <label>Harga Satuan</label>
                            <input type="text" name="Harga Satuan" class="form-control" placeholder="Harga Satuan" value=" {{ $tokoobat->Harga }}">

                            @if($errors->has('Harga'))
                                <div class="text-danger">
                                    {{ $errors->first('Harga')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
