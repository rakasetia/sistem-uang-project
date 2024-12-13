@extends('template.template')

@section('page-title')
    Data Santri
@endsection

@section('content')
<div class="container">
    <div class="col-lg-12">
        <div class="card">
            <div class="header d-flex justify-content-between">
                <h2>Santri <small>Data semua santri</small></h2>
                <a href="{{ route('santri.buat') }}" type="button"  class="btn btn-success">Tambah data</a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                        <thead>
                            <tr>
                                <th scope="col">Nama Santri</th>
                                <th scope="col">kelas</th>
                                <th scope="col">Saldo</th>
                                <th scope="colspan-2">settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $santris as $santri)
                                <tr>
                                    <th>{{ $santri->Nama_santri}}</th>
                                    <th>{{ $santri->kelas }}</th>
                                    <th>{{ $santri->saldo }}</th>
                                    <td>
                                      
                                        <form action="{{ route('santri.destroy', $santri->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                              <a href="{{ route('santri.edit', $santri->id) }}" type="button" class="btn btn-warning">edit</a>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
