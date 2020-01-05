@extends('layouts.masnumi')

@section('title', 'Halaman Data Contact')

@section('content')

   <div class="container">
   	   <h1>Selamat Datang di halaman Data Contact</h1><br><br>

<!--    	   <a class="btn btn-primary" href="/contact/create">(+)Tambah Data</a><br><br>
 -->	   <table class="table">
	   <thead>
	   		<tr>
	   			<th>No.</th>
	   			<th>Foto</th>
	   			<th>Nomor Hp</th>
	   			<th>Email</th>
	   			<th>Alamat</th>
	   			<th>Action</th>
	   		</tr>
	   </thead>
	   <tbody> 
	   		
	   		<?php $no = 1; ?>
	   		@foreach($contact as $value )
				<tr>
					<td><?php echo $no; ?></td>
					<td></td>
					<td>{{ $value->telp }}</td>
					<td>{{ $value->email }}</td>
					<td>{{ $value->alamat }}</td>
					<td><a href="/contact/edit/{{$value->id_contact}}" class="badge badge-info">Edit</a></td>
				</tr>
			<?php $no++; ?>
			@endforeach   

	   </tbody>	
	   </table>
   </div>
@endsection