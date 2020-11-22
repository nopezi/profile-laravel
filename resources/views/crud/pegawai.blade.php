<!DOCTYPE html>
<html>
<head>
	<title>Pegawai</title>
</head>
<style type="text/css">
	.pagination li{
		float: left;
		list-style-type: none;
		margin: 5px;
	}
</style>
<body>

	<center>Crud Pegawai Laravel</center>
	<br/>
	<a href="/tes/tambah">+ Tambah Pegawai Baru</a>
	<br/>
	<br>
	<table border="1">
		<tr>
			<!-- <th>No</th> -->
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		<?php $no=1; ?>
		@foreach($pegawai as $p)
		<tr>
			<!-- <td>{{ $no++ }}</td> -->
			<td>{{ $p->nama_pegawai }}</td>
			<td>{{ $p->jabatan }}</td>
			<td>{{ $p->umur }}</td>
			<td>{{ $p->alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->id_pegawai }}">Edit</a>
				<a href="/pegawai/hapus/{{ $p->id_pegawai }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	<br/>
	Halaman : {{ $pegawai->currentPage() }} <br/>
	Jumlah data : {{ $pegawai->total() }} <br/>
	Data Per Halaman : {{ $pegawai->perPage() }} <br/>

	{{ $pegawai->links() }}

</body>
</html>