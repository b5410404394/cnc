@extends('layouts.main')

@section('content')


  <div class="container section">
	      <div class="row card-panel cyan lighten-5">
          <h4>Show Case</h4>
      @foreach ($showcases as $showcase)
        <div class="col s4 m4 l6">
          <div class="card medium">
            <div class="card-image">
              <img src="{{ URL::to('images/hackers.jpg') }}">
              <span class="card-title cyan">{{ $showcase->title }}</span>
            </div>
            <div class="card-content">
              <p>{{ $showcase->desc }}</p>
            </div>
            <div class="card-action">
              <a href="showcase/{{ $showcase->id }}">More</a>
            </div>
          </div>
        </div>
        @endforeach
        </div>
    </div>
@endsection