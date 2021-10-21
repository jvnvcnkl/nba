@extends('layouts.app')

@section('title', 'Teams')



@section('content')
<h1 class='text-center'>News</h1>

<div>

</div>
@foreach($articles as $articles)

<div>
    <a href="/news/{{$articles->id}}">
        <h3>{{ $articles->title}} </h3>
    </a>
    <i>by {{$articles->user->name}}</i>
    <blockquote>
        {{$articles->content}}
    </blockquote>
</div>


@endforeach

@endsection()