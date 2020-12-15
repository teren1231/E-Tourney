@extends('layouts.app')

@section('content')
<div class="d-flex" style="max-width: 100%;">
    @foreach($game as $game)
    
        <div class="card" style="max-width: 18rem; margin:20px;">
        <a href="{{route('tournament' , $game->id)}}"><img src="/{{$game->photo}}" class="card-img-top" style="width: 18rem;"></a>
            <div class="card-body">
                <h5 class="card-title">{{$game->name}}</h5>
                <p class="card-text">{{$game->description}}</p>
                
            </div>
        </div>

    
    @endforeach</div>
@endsection