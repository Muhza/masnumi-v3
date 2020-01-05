@extends('layouts.masnumi')

@section('title', 'Halaman Tambah User')

@section('content')

   <div class="container"> 
   	   <h1>Selamat Datang di halaman Tambah User</h1><br> 

	   <form action="/user" method="post">
	   	<div class="form-group">
		    <label>Nama Lengkap</label>
		    <input type="text" name="nm_lengkap" class="form-control" placeholder="Enter Nama Lengkap" >
		</div>

		<div class="form-group">
		    <label>Username</label>
		    <input type="text" name="username" class="form-control" placeholder="Enter Username">
		</div>

		<div class="form-group">
		    <label>Password</label>
		    <input type="password" name="Password" class="form-control" placeholder="Enter Password">
		</div>

		<div class="form-group">
		    <label>Level</label>
		    <input type="text" name="level" class="form-control" placeholder="Enter Level">
		</div>

		<div class="form-group">
		    <label>Telp</label>
		    <input type="text" name="telp" class="form-control" placeholder="Enter Nomor Telp" >
		</div>

		<div class="form-group">
		    <label>Alamat</label>
		    <textarea name="alamat"></textarea>
		</div>

		<div class="form-group">
		    <label>Gambar</label>
		    <input type="text" name="gambar" class="form-control">
		</div>

	   	<button class="btn btn-primary">Submit</button>
	   	<a class="btn btn-warning" href="{{ url('/user') }}">Kembali</a>

	   	{{ csrf_field() }}
	   </form>
   </div>
@endsection