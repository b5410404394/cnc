@extends('layouts.main')

@section('content')


  <div class="container section">
	      <div class="row card-panel cyan lighten-5">
          <h4>Show Case</h4>
          {{ $showcases }}
      @for ($i = 1; $i <= 8; $i++)
        <div class="col s4 m4 l6">
          <div class="card medium">
            <div class="card-image">
              <img src="{{ URL::to('images/hackers.jpg') }}">
              <span class="card-title cyan">Title {{ $i }}</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="showcase/{{ $i }}">This is a link</a>
            </div>
          </div>
        </div>

        <div class="col s4 m4 l6">
          <div class="card medium">
            <div class="card-image">
              <img src="{{ URL::to('images/profile.jpg') }}">
              <span class="card-title cyan">Title {{ $i }}</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="showcase/{{ $i }}">This is a link</a>
            </div>
          </div>
        </div>
        @endfor
        </div>
    </div>
@endsection