@extends('layout.default')

@section('title', "Printno | Indonesia Digital Printing")

@section('container')
<div class="container">
  <h1 class="mt-3">Welcome! {{$nama}}</h1>
  <div class="row mt-5">
    <div class="col-6 mt-3">
      <h1 style="font-size:5vw;" class="text-magenta">#StayAtHome</h1>
      <p>Lindungi diri Anda dari virus <b class="text-danger">COVID-19</b> dengan tetap berada di rumah #DiRumahAjaDulu</p>
      <a href="#" class="mt-5">Lihat Selengkapnya >></a>
    </div>
    <div class="col-6">
      <img src="{{asset('img/home.svg')}}" alt="House" class="img-fluid">
    </div>
  </div>
</div>
@endsection
