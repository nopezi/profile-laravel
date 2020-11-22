<!DOCTYPE html>
<html>
<head>
	<title>Crud Laravel</title>
</head>
<body>

	<center>Tambah data pegawai</center>

	<a href="/pegawai">< Kembali</a>

	<br>
	<br>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		<label>Nama</label>
		<input type="text" name="nama" required="required"><br>
		<label>Jabatan</label>
		<input type="text" name="jabatan"><br>
		<label>Umur</label>
		<input type="text" name="umur"><br>
		<label>Alamat</label>
		<textarea name="alamat" required="required"></textarea><br>
		<button type="submit">Simpan Data</button>
	</form>

</body>
</html>