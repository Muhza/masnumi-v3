@extends('layouts.masnumi')

@section('title', 'Halaman Data User')
@section('content')
	<div class="container">
   	   	<h1>Selamat Datang Di Halaman User</h1><br>

<!--    	   <a class="btn btn-primary" href="/user/create">(+)Tambah Data</a><br><br>
 -->	   <table class="table">
	   <thead>
	   		<tr>
	   			<th>No.</th>
	   			<th>Gambar</th>
<!-- 	   			<th>Nama Lengkap</th>
 -->	   		<th>Username</th>
 				<th>email</th>
	   			<th>Jabatan</th>
	   		<!-- 	<th>Telp</th>
	   			<th>Alamat</th> -->
<!-- 	   			<th colspan="2">Action</th>
 -->	   		</tr>
	   </thead>
	   <tbody> 
	   		
	   		<?php $no = 1; ?>
	   		@foreach($user as $value )
				<tr>
					<td><?php echo $no; ?></td>
					<td>{{ $value->gambar }}</td>
					<td>{{ $value->name }}</td>
					<td>{{ $value->email }}</td>
					<td>{{ $value->jabatan }}</td>
				<!-- 	<td>{{ $value->telp }}</td>
					<td>{{ $value->alamat }}</td> -->

					<!-- <td><a href="/user/edit/{{$value->id_user}}" class="badge badge-info">Edit</a></td>
					<td><a href="" class="badge badge-info">Hapus</a></td> -->
				</tr>
			<?php $no++; ?>
			@endforeach   

					

	   </tbody>	
	   </table>
   </div>
@endsection