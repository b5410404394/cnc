@extends('layouts.main')

@section('content')
<style>
.crop {
	/*height: 150px;*/
    overflow: hidden;
  	position: relative;
  	width: 250px;
	height: 250px;
	border-radius: 150px;
	-webkit-border-radius: 150px;
	-moz-border-radius: 150px;
	margin: auto;
	margin-top: 20px;
	margin-bottom: 20px;
}
.crop img {
	display: block;
/*	min-width: 100%;
	min-height: 100%;*/
	margin: auto;
	position: absolute;
	top: -100%;
	right: -100%;
	bottom: -100%;
	left: -100%;
}
.left-col{
	margin-top: 7.5px;
}
.card-content{
    font-family: "Roboto", sans-serif;
    font-size: 20px;
    text-align: center;
}
.space{
	margin-bottom: 30px;
}
</style>
<div class="container">
	<!-- <h3> Members </h3> -->
	<div class="space">
	</div>

	<div class="row">
		<div class="col s4  m4   l4 left-col">
			<div class="crop">
				<img src="{{ URL::to('/') }}/images/profile2.jpg">
			</div>
			<div class="card-content">
				<span class="card-title activator grey-text text-darken-4">Asst Prof Dr Usa Sammapun</span>
				<!-- <div class="card-title activator grey-text text-darken-4 surname">Sammapun</div> -->

			</div>

		</div>
		<div class="card-panel col s8 m8 l8">
			<h5>Contact information</h5>
			<b>Instructor</b>
			<div class="collapsible-header">
				<i class="material-icons dp48">email</i>
				fsciusa@ku.ac.th
			</div>
			<div class="collapsible-header">
				<i class="material-icons dp48">phone</i>
				085 998 8888
			</div>
			<div class="collapsible-header">
				<i class="material-icons dp48">location_on</i>
				SC45-872
			</div>
		</div>

		<div class="card-panel col s8 m8 l8">
			<h5>academic works</h5>
			<b>Teaching</b>
			<div class="collapsible-header">
				<i class="material-icons dp48">assignment</i>
				01418116 Computer Programming
			</div>
			<div class="collapsible-header">
				<i class="material-icons dp48">assignment</i>
				01418476 Software Testing & Verification
			</div>
			<b>Research</b>
			<div class="collapsible-header">
				<i class="material-icons dp48">description</i>
				Statistical Runtime Checking of Probabilistic Properties. RV 2007: 164-175
			</div>
			<div class="collapsible-header">
				<i class="material-icons dp48">description</i>
				Runtime Verification for Wireless Sensor Network Applications.
			</div>
			<div class="collapsible-header">
				<i class="material-icons dp48">description</i>
				Statistical Runtime Checking of Probabilistic Properties.
			</div>
		</div>
	</div>

</div>
@endsection