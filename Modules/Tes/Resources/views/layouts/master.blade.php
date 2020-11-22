<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Tes</title>
    </head>
    <!-- <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin: 5px;
		}
	</style> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <body>
    	<!-- <center>Module {!! config('tes.name') !!}</center><br> -->
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
