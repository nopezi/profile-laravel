<!-- menghubungkan dengan view template master -->
@extends('blog/master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p>Ini adalah Halaman kontak</p>

	<table border="1">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>nopezisaputra@gmail.com</td>
		</tr>
		<tr>
			<td>Nomor HP</td>
			<td>:</td>
			<td>081943214722</td>
		</tr>
	</table>

@endsection