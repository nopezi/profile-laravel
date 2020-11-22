<!DOCTYPE html>
<html>
<head>
	<title>Edit Pegawai Laravel</title>
</head>
<body>

	<center>Edit Pegawai</center>

	<a href="/pegawai">Kembali</a>

	<br><br>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_pegawai }}"><br>
		<label>Nama</label>
		<input type="text" name="nama" required="required" value="{{ $p->nama_pegawai }}"><br>
		<label>Jabatan</label>
		<input type="text" name="jabatan" required="required" value="{{ $p->jabatan }}"><br>
		<label>Umur</label>
		<input type="text" name="umur" required="required" value="{{ $p->umur }}"><br>
		<label>Alamat</label>
		<textarea required="required" name="alamat">{{ $p->alamat }}</textarea><br>
		<button type="submit">Simpan Data</button>
	</form>
	@endforeach

</body>
</html>