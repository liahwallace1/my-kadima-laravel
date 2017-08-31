@extends('layouts.app')
@section('title', 'Locations Page')
@section('content')
<div class="container">
  <h3>{{ $location->name }} Information</h3>
  <h4>{{ $location->city }}, {{ $location->state }}</h4><br />

  <p>There have been {{ count($location->games) }} games played at {{ $location->name }}.</p>
  <br />

  <p><strong>Turf: </stong>{{ $location->turf }}</p>
  <br />
  @if($location->lighting == true)
    <p><strong>This location has lighting at night!</strong></p>
  @else
    <p>This location is NOT lit at night.</p>
  @endif
  <br /><br />
  <a class="btn btn-primary" href="{{ url('/locations/'.$location->id.'/edit') }}">Edit Location</a>
  <a class="btn btn-primary" href="{{ url('/locations') }}">See All Locations</a>
</div>
@endsection
