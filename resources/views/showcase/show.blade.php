@extends('layouts.main')

@section('content')


 <div class="container section">
 	<div class="row card-panel cyan lighten-5">
 		<div class="col s12 m12 l12">
 			<h3>{{ $showcases->title }}</h3>
 			<p>{{ $showcases->desc }}</p>
 			<div class="section">
 			<div class="slider">
    		<ul class="slides">
		      	<li>
			      	<img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
			        <div class="caption center-align">
			          <h3>This is our big Tagline!</h3>
			          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
			        </div>
		      	</li>
		      	<li>
			        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
			        <div class="caption right-align">
			          <h3>Right Aligned Caption</h3>
			          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
			        </div>
     			</li>
      		<li>
        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
		    </ul>
		  	</div>
		  	</div>
 			<div class="section">
 				<p>Developed by: CNC Team</p>

 			<p>Link to project: <a href="{{ ($showcases->link) }}">{{ $showcases->link }}</a></p>
 			</div>
		</div>
	</div>
</div>
@endsection