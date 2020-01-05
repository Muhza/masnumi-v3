@extends('layouts.masnumi')
@section('title', 'Halaman Edit Wilayah')
@section('content')

   <div class="container">
   	   <h1>Selamat Datang di halaman Edit Wilayah</h1><br>

   	   	@foreach($edit as $editw)
	   	<form action="/wilayah/update/{{ $editw->id_wilayah}}" method="post" enctype="multipart/form-data">
	   	<input type="hidden" name="_method" value="PUT">

	   	<div class="form-group">
		    <label>Wilayah</label>
		    <input type="text" name="nm_wilayah" class="form-control" placeholder="Enter Nama Wilayah" value="{{ $editw->wilayah }}">
		</div>

		<!-- <div class="form-group">
			<label>Gambar Sebelumnya</label>
			<input class="form-control"><img src="{{ asset('storage/img/'. $editw->gambar)}}" width="100" height="120"></input>	
		</div> -->

		<div class="form-group">
		    <label>Gambar</label>
		    <input type="file" name="gambar" class="form-control">
		</div>

	   	<button class="btn btn-danger">Edit</button>
	   	<a class="btn btn-info" href="{{ url('/wilayah') }}">Kembali</a>

	   	{{ csrf_field() }}
	   </form>
	   @endforeach

   </div>
@endsection