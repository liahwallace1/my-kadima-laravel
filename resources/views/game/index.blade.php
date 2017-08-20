@extends('layouts.app')
@section('title', 'Games Page')
@section('content')
<div class="container">
  <div class="row">
    <ul class="list-group">
      @if($games != false)
        @foreach($games as $game)
          <li class="list-group-item">
            {{ $game->date_played }} - {{ $game->volley_total }}
          </li>
        @endforeach
      @else
        <li class="list-group-item">
          No Games available, would you like to start one? Click <a href="#">here</a>
        </li>
      @endif
  </ul>
  </div>
</div>
@endsection
