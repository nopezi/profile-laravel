<!DOCTYPE html>
<html>
<head>
	<title>Halaman formulir</title>
</head>
<body>
	<center>Halaman formulir</center>
	<form action="/formulir/proses" method="post">
		<input type="text" name="_token" value="<?=csrf_token()?>"><br>

		Nama :
		<input type="text" name="nama"><br/>
		Alamat :
		<input type="text" name="alamat"><br/>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>