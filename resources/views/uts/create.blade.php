<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2 my-5">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Tambah Data Mahasiswa</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-danger my-2" href="{{ route('mahasiswa.index') }}">BACK</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama:</strong>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa" 
                        autocomplete="off">
                        @error('nama')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>NIM:</strong>
                        <input type="number" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa" 
                        autocomplete="off">
                        @error('nim')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Program Studi:</strong>
                        <input type="text" name="prodi" class="form-control" placeholder="Program Studi Mahasiswa" 
                        autocomplete="off">
                        @error('prodi')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kelas:</strong>
                        <input type="text" name="kelas" class="form-control" placeholder="Kelas Mahasiswa" 
                        autocomplete="off">
                        @error('kelas')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nomor HP:</strong>
                        <input type="text" name="nohp" class="form-control" placeholder="Nomor HP Mahasiswa" 
                        autocomplete="off">
                        @error('nohp')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">SUBMIT</button>
            <button type="reset" class="btn btn-md btn-warning">RESET</button>
        </form>
</body>

</html>
