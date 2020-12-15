@extends('layouts.app')

@section('content')
<div class="d-flex" style="max-width: 100%;">
    @foreach($game as $game)
    
        <div class="card" style="max-width: 18rem;">
            <img src="/{{$game->photo}}" class="card-img-top" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$game->name}}</h5>
                <p class="card-text">{{$game->description}}</p>
                <a href="#" class="btn btn-primary">News</a>
                <a href="#" class="btn btn-primary">Tournament</a>
            </div>
        </div>
    
    @endforeach</div>
@endsection