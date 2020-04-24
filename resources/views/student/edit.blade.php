@extends('layout.default')

@section('title', "Form Ubah Data Matapelajaran")

@section('container')
<div class="container">
  <h1 class="mt-3">Ubah Data Mahasiswa</h1>
  <div class="row">
    <div class="col-8">
      <form method="post" action="/students/{{$student->id}}">
        {{method_field('patch')}}
        {{csrf_field()}}
        <div class="form-group">
          <label for="matapelajaran">Mata Pelajaran</label>
          <input type="text" class="form-control" name="matapelajaran" id="matapelajaran" value="{{$student->matapelajaran}}" placeholder="Masukan mata pelajaran">
        </div>
        <div class="form-group">
          <label for="dataset">Dataset</label>
          <input type="text" class="form-control" name="dataset" id="dataset" value="{{$student->dataset}}" placeholder="Masukan jumlah dataset">
        </div>
        <div class="form-group">
          <label for="status">Status (0 = tidak aktif; 1 = aktif)</label>
          <input type="text" class="form-control" name="status" id="status" value="{{$student->status}}" placeholder="Apakah aktif?">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
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
