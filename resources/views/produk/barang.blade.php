@extends('layouts.masnumi')

@section('title', 'Halaman Data Barang')

@section('content')

   <div class="container">
   	   <h1>Selamat Datang di halaman Data Barang</h1><br>

   	   @if(Auth::user()->jabatan == 'Admin')
   	   <a class="btn btn-primary" href="barang/create">(+)Tambah Data</a><br><br>
   	   @else

   	   @endif

   	   <form action="/barang/cari" method="get">
   	   		<input class="form-control" type="text" name="cari" autocomplete="off" placeholder="Cari Produk .." value="{{ old('cari') }}"> 
   	   		<button value="submit" class="btn btn-primary">Cari!</button>
   	   </form> 
	   <table class="table">
	   <thead>
	   		<tr>
	   			<th>No.</th>
	   			<th>Gambar</th>
	   			<th>Tanggal beli</th>
	   			<th>Spesifikasi</th>
	   			<th>Harga</th>
	   			<th>Jumlah Stok</th>
	   			<th>Kondisi</th>
	   			<th>Berat Ukuran</th>
	   			<th>Deskripsi Barang</th>

	   			@if(Auth::user()->jabatan == 'Admin')
   	   	   			<th colspan="2">Action</th>

		   	    @else

   	  		    @endif
	   		</tr>
	   </thead>
	   <tbody> 
	   		
	   		<?php $no = 1; ?>
	   		@foreach($barang as $value )
				<tr>
					<td><?php echo $no; ?></td>
					<td><img src="{{ asset('storage/img/'. $value->gambar_brg)}}" width="120"></td>
					<td>{{ $value->tgl_beli }}</td>
					<td>{{ $value->spek_barang }}</td>
					<td>Rp{{ number_format($value->harga) }}</td>
					<td>{{ $value->stok }}</td>
					<td>{{ $value->kondisi }}</td>
					<td>{{ $value->berat }}</td>
					<td>{{ $value->deskripsi }}</td>

					@if(Auth::user()->jabatan == 'Admin')
   	   					<td><a href="barang/edit/{{$value->id_barang}}" class="badge badge-info">Edit</a></td>
					<td><a href="barang/hapus/{{$value->id_barang}}" onclick="return confirm('Are you sure?')" class="badge badge-info">Hapus</a></td>
   	   				@else
   	   	
   	   				@endif
					
				</tr>
			<?php $no++; ?>
			@endforeach

	   </tbody>	
	   </table>
	   @section('pagination')
	   	{{ $barang->links() }}
	   @endsection
   </div>
@endsection