@extends('layouts.main')

@section('content')


 <div class="container">
 	<div class="row card-panel cyan lighten-5">
 		<div class="col">
 			<div class='card-panel'>
 			<h3 class="center">{{ $showcase->title }}</h3>
 		</div>
 		<div class='card-panel'>
 			<p>{{ $showcase->desc }}</p>
 			<div class="section" >
 			<div class="slider" style="max-width:75%; margin: 0 auto;">
    		<ul class="slides">
		      	<li>
			      	<img src="{{ URL::to($showcase->picture) }}">
			        <div class="caption center-align">
			          
			        </div>
		      	</li>
		    </ul>
		  	</div>
		  	</div>
 			<div class="section">
 				<p>Developed by: CNC Team</p>

 			<p>Link to project: <a href="{{ ($showcase->link) }}">{{ $showcase->link }}</a></p>
 			</div>
		</div>
	</div>
	</div>
</div>
@endsection