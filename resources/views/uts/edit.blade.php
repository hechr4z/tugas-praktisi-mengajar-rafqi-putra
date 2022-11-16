<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" 
                        enctype="multipart/form-data">
                        <a class="btn btn-danger my-2" href="{{ route('mahasiswa.index') }}">BACK</a>
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="font-weight-bold">ID:</label>
                                <input readonly class="form-control" name="id" 
                                value="{{ old('id', $mahasiswa->id) }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nama:</label>
                                <input type="text" class="form-control" name="nama" 
                                value="{{ old('nama', $mahasiswa->nama) }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">NIM:</label>
                                <input type="number" class="form-control" name="nim" 
                                value="{{ old('nim', $mahasiswa->nim) }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Program Studi:</label>
                                <input type="text" class="form-control" name="prodi" 
                                value="{{ old('prodi', $mahasiswa->prodi) }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Kelas:</label>
                                <input type="text" class="form-control" name="kelas" 
                                value="{{ old('kelas', $mahasiswa->kelas) }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nomor HP:</label>
                                <input type="text" class="form-control" name="nohp" 
                                value="{{ old('nohp', $mahasiswa->nohp) }}">
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
