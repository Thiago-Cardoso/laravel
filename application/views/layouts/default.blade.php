<!DOCTYPE html>

<html>
<head>
	<title>{{ $title }}</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::script('js/bootstrap.js')}}
</head>
<body>
	@if(Session::has('status_message'))
		<p align='center' style="color:green;"> {{Session::get('status_message')}} </p>
	@endif
	@yield('content')
</body>
</html>