@extends('layouts.app')

@section('title', 'Teams')



@section('content')

@foreach($team as $item)
<div>
    <p>
    <h3>{{$item->name}}</h3>
    City:{{$item->city}} <br>
    email:{{$item->email}} <br>
    Address:{{$item->adress}} <br>
    <p>
        @endforeach

        List of players:
        @foreach($players as $player)
    <ol>
        <a href="/player/{{$player->id }}">
            <li>{{$player->first_name}} {{$player->last_name}} </li>
        </a>
    </ol>
    @endforeach

</div>





@endsection