@extends('layout.layout')

@section('title', 'Тег')

@section('content')
    <h2>Тег {{$tag->name}}</h2>
    <h3>Пости з таким тегом:</h3>
    <ul>
        @foreach($tag->posts as $post)
            <li>
                <a href="{{route('post.show', $post)}}">{{$post->title}}</a>
            </li>
        @endforeach
    </ul>
@endsection
