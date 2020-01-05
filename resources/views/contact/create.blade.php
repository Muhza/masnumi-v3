<!-- @extends('layouts.masnumi')

@section('title', 'Halaman Tambah Contact')

@section('content')

   <div class="container"> 
   	   <h1>Selamat Datang di halaman Tambah Contact</h1><br> 

	   <form action="/contact" method="post">
		<div class="form-group">
		    <label>Telp</label>
		    <input type="text" name="telp" class="form-control" placeholder="Enter nomor telp" autocomplete="off" required>
		</div>

		<div class="form-group">
		    <label>Email</label>
		    <input type="email" name="email" class="form-control" placeholder="Enter Email" autocomplete="off" required>
		</div>

		<div class="form-group">
		    <label>Alamat</label>
		    <textarea name="alamat" class="form-control" placeholder="Enter Alamat" required></textarea>
		</div>

		<div class="form-group">
		    <label>Gambar</label>
		    <input type="file" name="gambar" class="form-control" required>
		</div>

	   	<button class="btn btn-primary">Submit</button>
	   	<a class="btn btn-warning" href="{{ url('/contact') }}">Kembali</a>

	   	{{ csrf_field() }}
	   </form>
   </div>
@endsection -->