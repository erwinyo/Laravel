@extends('layout.default')

@section('title', "Detail Students")

@section('container')
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Daftar Mahasiswa</h1>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$student->matapelajaran}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">AVAIABLE DATASET: {{$student->dataset}}</h6>
          <p class="card-text">STATUS: {{$student->status}}</p>

          <a href="/students/{{$student->id}}/edit" class="btn btn-primary">Edit</a>
          <form class="" action="{{$student->id}}" method="post">
            {{method_field('delete')}}
            {{csrf_field()}}
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>

          <a href="/students" class="card-link">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
