@extends('layouts.app')
@section('title', 'Locations Page')
@section('content')
<div class="container">
  <h3>Kadima Locations</h3>
  <a class="btn btn-warning btn-group-sm" href="{{ url('/locations/new') }}">Add a Location</a>
  <br /><br />
  <div class="row">
    <ul class="list-group">
      @if($locations != false)
        @foreach($locations as $location)
          <li class="list-group-item">
            <strong><a href="{{ url('/locations/'.$location->id) }}">{{ $location->name }}</a></strong><br />
            {{ $location->city }}, {{ $location->state }}<br />
            <a class="btn btn-default btn-group-xs" href="{{ url('/locations/'.$location->id.'/edit') }}">Edit</a>
            @if(!isset($location->city) || !isset($location->state) || !isset($location->turf))
              <p><em>This location needs to be updated.</em></p>
            @endif
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
