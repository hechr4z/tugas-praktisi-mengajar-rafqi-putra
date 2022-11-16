<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>UTS Pemrograman Web Lanjut</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2 my-5">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Data Mahasiswa</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('mahasiswa.create') }}">CREATE</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Program Studi</th>
                <th>Kelas</th>
                <th>No. HP</th>
                <th width="280px">Operasi</th>
            </tr>
            @foreach ($mahasiswa as $maha)
            <tr>
                <td>{{ $maha->id }}</td>
                <td>{{ $maha->nama }}</td>
                <td>{{ $maha->nim }}</td>
                <td>{{ $maha->prodi }}</td>
                <td>{{ $maha->kelas }}</td>
                <td>{{ $maha->nohp }}</td>
                <td>
                    <form action="{{ route('mahasiswa.destroy',$maha->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$maha->id) }}">UPDATE</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
</body>

</html>
