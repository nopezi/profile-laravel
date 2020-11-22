<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material-dashboard-master/assets/img/apple-icon.png') }}">
		<link rel="icon" type="image/png" href="{{ asset('material-dashboard-master/assets/img/favicon.png') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrator</title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link href="{{ asset('material-dashboard-master/assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet">
        <link href="{{ asset('material-dashboard-master/assets/demo/demo.css') }}" rel="stylesheet" />
    </head>
    <body>
        @yield('content')
    </body>
</html>
