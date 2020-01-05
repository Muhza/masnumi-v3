@extends('layouts.masnumi')

@section('title', 'Halaman Data wilayah')

@section('content')

   <div class="container">
   	   <h1>Selamat Datang di halaman Data Wilayah</h1><br>

   	   <a class="btn btn-primary" href="wilayah/create">(+)Tambah Data</a><br><br>
	   <table class="table">
	   <thead>
	   		<tr>
	   			<th>No.</th>
	   			<th>Gambar</th>
	   			<th>Wilayah</th>
	   			<th colspan="2">Action</th>
	   		</tr>
	   </thead>
	   <tbody> 
	   		
	   		<?php $no = 1; ?>
	   		@foreach($wilayah as $value )
				<tr>
					<td><?php echo $no; ?></td>
					<td><img src="{{ asset('storage/img/'. $value->gambar)}}" width="120"></td>
					<td>{{ $value->wilayah }}</td>
					<td><a href="/wilayah/edit/{{$value->id_wilayah}}" class="badge badge-info">Edit</a></td>
					<td><a href="/wilayah/hapus/{{$value->id_wilayah}}" onclick="return confirm('Are you sure?')" class="badge badge-info">Hapus</a></td>
				</tr>
			<?php $no++; ?>
			@endforeach

	   </tbody>	
	   </table>
   </div>
@endsection