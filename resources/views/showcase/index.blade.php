@extends('layouts.main')

@section('content')


  <div class="container section">
	      <div class="row card-panel cyan lighten-5">
          <div class='card-panel'>
          <h4 class="center">Show Case</h4>
        </div>
      @foreach ($showcases as $showcase)
        <div class="col s4 m4 l6">
          <div class="card medium">
            <div class="card-image">
              <img src="{{ URL::to($showcase->picture) }}">
              <span class="card-title cyan">{{ $showcase->title }}</span>
            </div>
            <div class="card-content">
              <p>{{ str_limit($showcase->desc, 160) }}</p>
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