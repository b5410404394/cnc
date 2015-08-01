@extends('layouts.main')

@section('content')
<div id="index-banner" class="parallax-container">
	<div class="section no-pad-bot">
		<div class="container">
			<br><br>
			<h1 class="header center light-blue-text text-lighter-4">Communication Network And Cloud Research<br>Laboratory</h1>
			<div class="row center">
				<h5 class="header col s12 light">Some Random String Generate By Me To Make It More Beautiful</h5>
			</div>
			<div class="row center">
				<a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
			</div>
			<br><br>
		</div>
	</div>
	<div class="parallax"><img src="{{ URL::to('/images/1.jpg') }}" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-50%, 205px, 0px);"></div>
</div>

<div class="container">
	<div class="section">

		<!--   Icon Section   -->
		<div class="row">
			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons">group</i></h2>
					<h5 class="center">Who Are We</h5>

					<p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons">visibility</i></h2>
					<h5 class="center">Vision</h5>

					<p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
				</div>
			</div>

			<div class="col s12 m4">
				<div class="icon-block">
					<h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
					<h5 class="center">Goal</h5>

					<p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="parallax-container valign-wrapper">
	<div class="slider">
		<ul class="slides">
			<li>
				<img src="{{ URL::to('/images/cnc2.jpg') }}"> <!-- random image -->
				<div class="caption center-align light-blue darken-1 z-depth-2">
					<h3>Congratulations!</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="{{ URL::to('/images/cnc3.jpg') }}"> <!-- random image -->
				<div class="caption center-align light-blue darken-1 z-depth-2">
					<h3>CS 25 Bye Nior</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="{{ URL::to('/images/cnc4.jpg') }}"> <!-- random image -->
				<div class="caption center-align light-blue darken-1 z-depth-2">
					<h3>Happy Meal</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
			<li>
				<img src="{{ URL::to('/images/cnc1.jpg') }}"> <!-- random image -->
				<div class="caption center-align light-blue darken-1 z-depth-2">
					<h3>DevCamp is Coming</h3>
					<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
			</li>
		</ul>
	</div>
	<div class="parallax"><img src="{{ URL::to('/images/1.jpg') }}" alt="Unsplashed background img 2" style="display: block; transform: translate3d(-50%, 193px, 0px);"></div>
</div>

<div class="container">
	<div class="section">

		<div class="row">
			<div class="col s12 center">
				<h3><i class="mdi-content-send brown-text"></i></h3>
				<h4>Contact Us</h4>
				<p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
			</div>
		</div>

	</div>
</div>
<div class="parallax-container valign-wrapper">
	<div class="section no-pad-bot">
		<div class="container">
			<div class="row center">
				<h5 class="header center col s12 light">A modern responsive front-end framework based on Material Design</h5>
			</div>
		</div>
	</div>
	<div class="parallax"><img src="{{ URL::to('/images/2.jpg') }}" alt="Unsplashed background img 3" style="display: block; transform: translate3d(-50%, 19px, 0px);"></div>
</div>

@endsection