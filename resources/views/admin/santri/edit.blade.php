<!DOCTYPE html>
@extends('template.template')

@section('page-title')
    Data Santri
@endsection

@section('content')
<div class="container">
    <h2>upadte data santri</h2>
    <form action="{{ route('santri.update',$santri->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="Nama_santri">nama santri</label>
            <input type="text" class="form-control" id="Nama_santri"  value="{{ $santri->Nama_santri }}" name="Nama_santri">
        </div>
        <div class="mb-2">
            <label for="kelas">kelas berapa</label>
            <input type="text" class="form-control" id="kelas"  value="{{ $santri->kelas }}" name="kelas">
        </div>
        <div class="mb-2">
            <label for="saldo">masukan saldo</label>
            <input type="text" class="form-control" id="saldo" value="{{ $santri->saldo }}" name="saldo">
        </div>
        <button type="submit" class="btn btn-primary">update data</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
