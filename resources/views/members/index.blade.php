@extends('layouts.main')

@section('content')
<style>
.crop {
  height: 240px;
  overflow: hidden;
  position: relative;
}
	.crop img {
  display: block;
  min-width: 100%;
  min-height: 100%;
  margin: auto;
  position: absolute;
  top: -100%;
  right: -100%;
  bottom: -100%;
  left: -100%;
}
</style>
<div class="container">
	<h3> Members </h3>

	<div class="row card-panel cyan lighten-5">
		<h5> Instructors </h5>

		<div class="col s12  m4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<div class="crop">
					<img class="activator" src={{ URL::to('/') }}/images/profile2.jpg>
					</div>
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Usa</span>
					<div class="card-title activator grey-text text-darken-4 surname">Sammapun</div>

					<p><a href="#">Profile</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>



		<div class="col s12  m4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<div class="crop">
					<img class="activator" src={{ URL::to('/') }}/images/profile2.jpg>
					</div>
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Usa</span>
					<div class="card-title activator grey-text text-darken-4 surname">Sammapun</div>

					<p><a href="#">Profile</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>

		<div class="col s12  m4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<div class="crop">
					<img class="activator" src={{ URL::to('/') }}/images/profile2.jpg>
					</div>
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Usa</span>
					<div class="card-title activator grey-text text-darken-4 surname">Sammapun</div>

					<p><a href="#">Profile</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>




	</div>

	<div class="row card-panel cyan lighten-5">
		<h5> Students </h5>

		<div class="col s12  m4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<div class="crop">
					<img class="activator" src={{ URL::to('/') }}/images/profile2.jpg>
					</div>
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Usa</span>
					<div class="card-title activator grey-text text-darken-4 surname">Sammapun</div>

					<p><a href="#">Profile</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>



		<div class="col s12  m4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<div class="crop">
					<img class="activator" src={{ URL::to('/') }}/images/profile2.jpg>
					</div>
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Usa</span>
					<div class="card-title activator grey-text text-darken-4 surname">Sammapun</div>

					<p><a href="#">Profile</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>

		<div class="col s12  m4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<div class="crop">
					<img class="activator" src={{ URL::to('/') }}/images/profile2.jpg>
					</div>
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Usa</span>
					<div class="card-title activator grey-text text-darken-4 surname">Sammapun</div>

					<p><a href="#">Profile</a></p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					<p>Here is some more information about this product that is only revealed once clicked on.</p>
				</div>
			</div>
		</div>




	</div>



</div>
@endsection