<!DOCTYPE html>
<html>
<head>
	<title>Passing data Laravel</title>
</head>
<body>
		<h3>Passing data laravel</h3>
		<p>
			Nama saya {{$nama}}
		</p>
		<p>Matakuliah</p>
		<ul>
			@foreach($makul as $m)
			<li>{{$m}}</li>
			@endforeach
		</ul>
</body>
</html>