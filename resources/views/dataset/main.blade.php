@extends('layout.default')

@section('title', "Dataset")

@section('container')
<div class="container">
  <h1 class="mt-3">Dataset</h1>
  <table class="table mt-5">
  	<thead class="thead-dark">
  		<tr>
  			<th>ID</th>
  			<th>MATA PELAJARAN</th>
  			<th>DATASET</th>
  			<th>STATUS</th>
  			<th>AKSI</th>
  		</tr>
  	</thead>
  	<tbody>
      @foreach($dataset as $dst)
    		<tr>
    			<th scope="row">{{$loop->iteration}}</th>
    			<td>{{$dst->matapelajaran}}</td>
    			<td>{{$dst->dataset}}</td>
    			<td>{{$dst->status}}</td>
    			<td>
    				<a href="" class="badge badge-success">edit</a>
    				<a href="" class="badge badge-danger">hapus</a>
    			</td>
    		</tr>
      @endforeach
  	</tbody>
  </table>
</div>
@endsection
