<!-- menghubungkan dengan view template master -->
@extends('blog/master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section pendek -->
@section('judul_halaman', 'Halaman Home')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p>Ini adalah halaman Home</p>
	<p>Selamat datang !</p>

@endsection