@extends('layouts.masnumi')

@section('title', 'Halaman Detail')

@section('content')

   <div class="container"> 
   	   <h1>Selamat Datang di halaman Detail</h1><br> 

	   <form action="/barang" method="post">
	   	<div class="form-group">
		    <label>Nama Jenis</label>
		    <input type="text" name="nm_jenis" class="form-control" placeholder="Enter Nama Jenis">
		</div>

		<div class="form-group">
		    <label>Gambar</label>
		    <input type="text" name="gambar" class="form-control">
		</div>

	   	<button class="btn btn-danger">Edit</button>
	   	<a class="btn btn-primary" href="#">Delete</a>
	   	<a class="btn btn-info" href="{{ url('') }}">Kembali</a>

	   	{{ csrf_field() }}
	   </form>
   </div>
@endsection