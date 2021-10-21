@extends('layouts.app')

@section('title', 'Teams')



@section('content')

<div>
    <p>
    <h3>{{$team->name}}</h3>
    City:{{$team->city}} <br>
    email:{{$team->email}} <br>
    Address:{{$team->adress}} <br>
    <p>
        List of players:
        @foreach($players as $player)
    <ol>
        <a href="/player/{{$player->id }}">
            <li>{{$player->first_name}} {{$player->last_name}} </li>
        </a>
    </ol>
    @endforeach

</div>

<div>
    <h3>Comments</h3>
    @forelse($comments as $comment)

    <div> {{ $comment->content }}</div>

    @empty
    <div> No comments to show</div>
    @endforelse

</div>

<div>
    <h3>Leave a comment</h3>
    <form action="{{ route('createComment', ['team' => $team->id]) }}" class="form-control" method='POST'>
        @csrf

        <input id="team_id" name="team_id" type="hidden" value="{{$team->id}}">
        <textarea name="content" id="content" cols="20" rows="5" placeholder="Leave a comment"></textarea>
        @error('content')
        <div class="alert alert-danger"> {{$message}}</div>
        @enderror
        <button class="btn btn-primary" type='submit'>Submit your comment</button>

</div>

@endsection