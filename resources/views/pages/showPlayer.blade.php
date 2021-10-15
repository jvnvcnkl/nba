@extends('layouts.app')

@section('title', 'Player')



@section('content')

@foreach($player as $item)
<div>
    <p>
    <h3>{{$item->first_name}} {{$item->last_name}}</h3><br>
    Email:{{$item->email}} <br>
    Team: <a href="../team/{{$item->team->id}}"> {{ $item->team->city}} {{$item->team->name}} <br></a>
    <p>
        @endforeach


</div>





@endsection