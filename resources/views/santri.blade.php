<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>keuangan-santri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                menejemen keuangan santri
                <a href="/add/santri" class="btn btn-success btn-sm float-end">Tambah data</a>
            </div>
            @if (Session::has('success'))
            <span class="alert alert-success p-2">{{ Session::get('success') }}</span>
            @endif

            @if (Session::has('fail'))
            <span class="alert alert-danger p-2">{{ Session::get('fail') }}</span>
            @endif

            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <th>Nomor</th>
                        <th>Nama santri</th>
                        <th>Kelas</th>
                        <th>uang yang dititipkan</th>  
                        <th>tanggal registrasi</th>
                        <th>terakhir update</th>
                        <th colspan="2">tombol</th>  
                    </thead>
                    <tbody>
                        @if (count($all_santri) > 0)
                             @foreach ($all_santri as $item )
                             <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->Nama_santri }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->uang_yang_dititipkan }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td><a href="/edit/{{ $item->id }}" class="btn btn-primary btn-sm">Edit data</td>
                                <td><a href="/delete/{{ $item->id }}" class="btn btn-danger btn-sm">Hapus</td>
                            </tr>
                             @endforeach
                            
                        @else
                            <tr>
                                <td colspan="8">Tidak ada data</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>