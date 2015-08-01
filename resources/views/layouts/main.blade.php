<!DOCTYPE html>
<html>
<head>
	<title>CNC Laboratory</title>
	<link href="{{ URL::to('materialize/css/materialize.min.css') }}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="{{ URL::to('materialize/css/home.css ') }}" rel="stylesheet" type="text/css">
</head>
<body>
	<nav class=" light-blue lighten-2">
		<div class="container">
			<div class="nav-wrapper">
				<a href="{{url('home')}}" class="left brand-logo">CNC</a>
				<ul class="right hide-on-med-and-down">
					<li><a href="{{url('showcase')}}">Show Case</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Activity</a></li>
					<li><a href="{{url('member')}}">Member</a></li>
					<li><a href="#">Recruit</a></li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')


	<footer class="page-footer light-blue darken-2">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">About Us</h5>
					<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
				</div>
				<div class="col l3 s12 right">
					<h5 class="white-text">Connect</h5>
					<ul>
						<li><a class="white-text" href="#!">Dev Camp</a></li>
						<li><a class="white-text" href="#!">Department Of Computer Science</a></li>
						<li><a class="white-text" href="#!">Kasetsart University</a></li>
						<li><a class="white-text" href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				Copyright&copy; CNC Lab, Department of Computer Science, Kasetsart University 2015
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="{{ URL::to('materialize/js/materialize.min.js') }}"></script>

	<script type="text/javascript">
	</script>
	<script type="text/javascript">
	(function($){
		$(function(){
			$('.button-collapse').sideNav();
			$('.parallax').parallax();
			$('.slider').slider({full_width: true});
			$('.slider').slider('start');
  		}); // end of document ready
	})(jQuery); // end of jQuery name space
	</script>
</body>
<footer>
</footer>
</html>