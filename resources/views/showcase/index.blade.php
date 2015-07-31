@extends('layouts.main')

@section('content')


  <div class="container section">
	      <div class="row">
      @for ($i = 1; $i <= 10; $i++)
        <div class="col s4 m4 l6">
          <div class="card medium">
            <div class="card-image">
              <img src="{{ URL::to('images/hackers.jpg') }}">
              <span class="card-title cyan">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="{{ $i }}">This is a link</a>
            </div>
          </div>
        </div>
        @endfor
        </div>
    </div>
@endsection