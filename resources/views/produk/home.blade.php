@extends('layouts.masnumi')

@section('title', 'masnumi.com')

@section('content')
	@if(Auth::user()->jabatan == 'Admin')
		<h1>Halaman Admin</h1>
	@else
		<h1>Halaman User</h1>
	@endif
	
@endsection  