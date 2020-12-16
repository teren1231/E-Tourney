@extends('layouts.app')

@section('content')
@foreach($tournament as $tour)
    <div class="card w-75">
      <div class="card-body">
        <img src="/{{$tour->photo}}" style="
    width: 800px;
    height: 200px;">
        <a href="{{ url('/registertourney') }}" class="btn btn-primary">Registrasi</a><br>
        @if($tour-> id == '1')
        Game setting<br>
        Rules sesuai PCS 3: APAC <br> 
        3 Days Matches <br>
        Day 1 : Erangel, Miramar, Erangel <br>
        Day 2 : Erangel, Miramar, Miramar <br>
        Day 3 : Erangel, Miramar, Miramar, Erangel, Miramar <br>
        Schedule <br>
        Start : 12 February 2020 <br>
        Check In : 10 Minutes <br>
        Prizepool <br>
        1st : Rp. 5.000.000 <br>
        2nd : Rp. 3.000.000 <br>
        3rd : Rp. 2.000.000 <br>
        </div>
        @endif

        @if($tour-> id == '2')
        Game setting<br>
        Custom Lobby<br> 
        2 Days Matches <br>
        Ramdom Map <br>
        Schedule <br>
        Start : 12 February 2020 <br>
        Check In : 10 Minutes <br>
        Prizepool <br>
        1st : Rp. 3.000.000 <br>
        2nd : Rp. 1.000.000 <br>
        3rd : Rp. 500.000 <br>
        </div>
        @endif


    </div>
@endforeach
@endsection

<style>

</style>