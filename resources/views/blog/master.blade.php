<!DOCTYPE html>
<html>
<head>
	<title>Master template blade tutorial laravel</title>
</head>
<body>

	<header>
		<h2>Blog Percobaan</h2>

		<nav>
			<a href="/blog">Home</a>
			|
			<a href="/blog/tentang">Tentang</a>
			|
			<a href="/blog/kontak">Kontak</a>
		</nav>
	</header>
<hr/>
<br/>
<br/>
	<!-- judul halaman -->
	<h3>@yield('judul_halaman')</h3>

	<!-- bagian kontent blog -->
	@yield('konten')

	<br/>
	<br/>
	<br/>
	<hr/>

	<footer>
		<p>&copy; Nopezi</p>
	</footer>
</body>
</html>