@extends('layout.default')

@section('title', "Cara Kerja")

@section('container')
<div class="container">
  <div class="row mt-5">
    <div class="col-6 mt-3">
      <h1 style="font-size:8vw;" class="text-warning">Cara Pakainya Gimana?</h1>
      <p></p>
    </div>
    <div class="col-6">
      <img src="{{asset('img/mobile-touch.svg')}}" alt="Mobile" class="img-fluid">
    </div>
  </div>
</div>
@endsection
