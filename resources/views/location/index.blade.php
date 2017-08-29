@extends('layouts.app')
@section('title', 'Locations Page')
@section('content')
<div class="container">
  <div class="row">
    <ul class="list-group">
      @if($locations != false)
        @foreach($locations as $location)
          <li class="list-group-item">
            {{ $location->name }} - {{ $location->city }}
          </li>
        @endforeach
      @else
        <li class="list-group-item">
          No Locations available, would you like to start one? Click <a href="#">here</a>
        </li>
      @endif
  </ul>
  </div>
</div>
@endsection
