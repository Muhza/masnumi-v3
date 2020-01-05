@extends('layouts.masnumi')

@section('title', 'Halaman Tambah Data')

@section('content')

	<h1>Selamat Datang di halaman Tambah Data</h1><br> 

   <div class="container"> 
	   <form action="/barang" method="post" enctype="multipart/form-data">
	   	<div class="form-group">
		    <label>Tanggal Beli</label>
		    <input type="date" name="tgl_beli" class="form-control" autocomplete="off" required>
		</div>

	   	<div class="form-group">
		    <label>Spesifikasi</label>
		    <input type="text" name="spek" class="form-control" placeholder="Enter Spesifikasi" autocomplete="off" required>
		</div>

		<div class="form-group">
		    <label>Harga</label>
		    <input type="text" name="harga" class="form-control" placeholder="Enter Harga" autocomplete="off" required>
		</div>

		<div class="form-group">
		    <label>Jumlah Stok</label>
		    <input type="text" name="jml_stok" class="form-control" placeholder="Enter Jumlah Stok" autocomplete="off" required>
		</div>

		<div class="form-group">
		    <label>Kondisi</label>
		    <select name="kondisi" class="form-control" required>
		    	<option>-- Pilih Kondisi --</option>
		    	<option value="Baru">Baru</option>
		    	<option value="Lama">Lama</option>
		    </select>
		    <!-- <input type="text" name="kondisi" placeholder="Enter Kondisi" autocomplete="off" > -->
		</div>

		<div class="form-group">
		    <label>Berat Ukuran</label>
		    <input type="text" name="berat" class="form-control" placeholder="Enter Berat Ukuran" autocomplete="off" required>
		</div>

		<div class="form-group">
		    <label>Deskripsi</label>
		    <textarea name="desc" class="form-control" placeholder="Enter Deskripsi" autocomplete="off" required=""></textarea>
		</div>

		<div class="form-group">
		    <label>Gambar</label>
		    <input type="file" name="gambar" class="form-control" required>
		</div>

	   	<button class="btn btn-primary">Submit</button>
	   	<a class="btn btn-warning" href="{{ url('/barang') }}">Kembali</a>

	   	{{ csrf_field() }}
	   </form>
   </div>
@endsection