@extends('layouts.masnumi')
@section('title', 'Halaman Edit Contact')
@section('content')
	
   <div class="container"> 
   	   <h1>Selamat Datang di halaman Edit contact</h1><br>

   	   @foreach($editc as $edit)
   	   	<form action="/contact/update/{{ $edit->id_contact }}" method="post">
   	   	<input type="hidden" name="_method" value="PUT">
		<div class="form-group">
		    <label>Nomor Telp</label>
		    <input type="text" name="telp" class="form-control" autocomplete="off" value="{{ $edit->telp }}" required>
		</div>

		<!-- ket eror validate -->
		@if(count($errors) > 0 )
   	   	<ul>
   	   		@foreach($errors->all() as $error)
   	   		 <p>{{ $error }}</p>
   	   		@endforeach
   	   	</ul>
   	    @endif

		<div class="form-group">
		    <label>Email</label>
		    <input type="email" name="email" class="form-control" autocomplete="off" value="{{ $edit->email }}" required>
		</div>

		<div class="form-group">
		    <label>Alamat</label>
		    <textarea name="alamat" class="form-control" required>{{ $edit->alamat }}</textarea>
		</div>

		<div class="form-group">
		    <label>Gambar</label>
		    <input type="file" name="gambar" class="form-control" required>
		</div>

	   	<button class="btn btn-primary">Submit</button>
	   	<a class="btn btn-warning" href="{{ url('/contact') }}">Kembali</a>

	   	{{ csrf_field() }}
	   </form>
   	   @endforeach
   </div>
@endsection