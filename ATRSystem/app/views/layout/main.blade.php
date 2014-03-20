<!DOCTYPE html>
<html>
	<head>
		<title> Air Ticket Reservation System</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ URL::route('home') }}">ATR HOME</a>
			</div>
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::to('flight/reserve') }}">Reserve Flights</a></li>
			<li><a href="{{ URL::to('details/personal') }}">Personal Details</a>
	</ul>
</nav>


	</head>
	<body>
		@if(Session::has('global'))
		<p>{{Session::get('global')}}</p>
		@endif
		@include('layout.navigation')
		@yield('content')
	</body>
</html>

