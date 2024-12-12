<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit data santri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">edit data</div>
            @if (Session::has('fail'))
                <span class="alert alert-success p-2">{{ Session::get('fail')}}</span>
            @endif
            <div class="card-body">
                <form action="{{ route('editsantri', $santri->id) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <input type="hidden" name="santri_id" id="{{ $santri->id }}">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nama santri</label>
                        <input type="text" name="Nama_santri" value="{{ $santri->Nama_santri }}" class="form-control" id="formGroupExampleInput" placeholder="masukan nama santri">
                        @error('Nama_santri')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                  <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Kelas</label>
                        <input type="text" name="kelas" value="{{ $santri->kelas }}" class="form-control" id="formGroupExampleInput2" placeholder="masukan kelas">
                        @error('kelas')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                  <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">uang yang dititipkan</label>
                        <input type="text" name="uang_yang_dititipkan" value="{{ $santri->uang_yang_dititipkan }}" class="form-control" id="formGroupExampleInput2" placeholder="masukan uang">
                        @error('uang_yang_dititipkan')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
                </form>                
        </div>
    </div>
</body>
</html>