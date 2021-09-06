<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
		<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
		<title>Employee Thermo</title>
		<!-- Google font-->
		<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
		@include('backend.layouts.authentication.css')
        @stack('styles')
	</head>
	<body class="dark-only">
			@yield('content')
			@include('backend.layouts.authentication.script')
            @stack('scripts')
	</body>
</html>
