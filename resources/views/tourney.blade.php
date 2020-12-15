@extends('layouts.app')

@section('content')
@foreach($tournament as $tour)
    <div class="card w-75">
      <div class="card-body">
        <img src="/{{$tour->photo}}">
        <p class="card-text">{{$tour->name}}</p>
        <a href="#" class="btn btn-primary">Button</a>
      </div>
    </div>
@endforeach
@endsection