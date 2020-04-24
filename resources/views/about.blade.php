@extends('layout.default')

@section('title', "About")

@section('container')
<div class="container">
  <h1 class="mt-3">About Us</h1>
  <div class="row mt-5">
    <div class="col-6 mt-3">
      <h1 style="font-size:8vw;" class="text-magenta">Printno</h1>
      <p>Printel merupakan perusahaan besar yang akan membantu Anda pencetakan tugas Anda sehari-hari dengan tidak ada batasan dan waktu.</p>
      <a href="#" class="mt-5">Lihat Selengkapnya >></a>
    </div>
    <div class="col-6">
      <img src="{{asset('img/true-love.svg')}}" alt="True Love" class="img-fluid">
    </div>
  </div>
</div>
@endsection
