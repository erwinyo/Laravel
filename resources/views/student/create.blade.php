@extends('layout.default')

@section('title', "Detail Students")

@section('container')
<div class="container">
  <h1 class="mt-3">Tambah Data Mahasiswa</h1>
  <div class="row">
    <div class="col-8">
      <form method="post" action="/students">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="matapelajaran">Mata Pelajaran</label>
          <input type="text" class="form-control" name="matapelajaran" id="matapelajaran" value="{{old('matapelajaran')}}" placeholder="Masukan mata pelajaran">
        </div>
        <div class="form-group">
          <label for="dataset">Dataset</label>
          <input type="text" class="form-control" name="dataset" id="dataset" value="{{old('dataset')}}" placeholder="Masukan jumlah dataset">
        </div>
        <div class="form-group">
          <label for="status">Status (0 = tidak aktif; 1 = aktif)</label>
          <input type="text" class="form-control" name="status" id="status" value="{{old('status')}}" placeholder="Apakah aktif?">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
    </div>
    <div class="col-4">
      @if ($errors->any())
          <div class="alert alert-danger">
            <h1>Error!</h1>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
    </div>
  </div>
</div>
@endsection
