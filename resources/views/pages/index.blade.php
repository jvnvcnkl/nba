@extends('layouts.app')

@section('title', 'Teams')



@section('content')
<h1 class='text-center'>Teams</h1>
<div class='d-flex justify-content-center'>

    <ul>
        @foreach($teams as $team)

        <li class="mt-2">
            <a href="/team/{{$team->id}}"> {{ $team->name}} {{ $team->city}} </a>
        </li>

        @endforeach
    </ul>
</div>
@endsection()