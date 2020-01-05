@extends('layouts.masnumi')

@section('title', 'Halaman Tambah Data Wilayah')

@section('content')

   <div class="container"> 
   	   <h1>Selamat Datang di halaman Tambah Data Wilayah</h1><br>

	   <form action="/wilayah" method="post" enctype="multipart/form-data">
	   	<div class="form-group">
		    <label>Wilayah : </label>
		    <input type="text" name="wilayah" class="form-control" placeholder="Ketikkan Nama Wilayah" autocomplete="off" required>
		</div>

		<div class="form-group">
		    <label>Gambar</label>
		    <input type="file" name="gambar" class="form-control" autocomplete="off" required>
		</div>

	   	<button class="btn btn-primary">Submit</button>
	   	<a class="btn btn-warning" href="{{ url('/wilayah') }}">Kembali</a>

	   	{{ csrf_field() }}
	   </form>
   </div>
@endsection