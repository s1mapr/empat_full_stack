@extends('layout.layout')

@section('title', 'Всі пости')

@section('content')
    <h2>Всі пости</h2>
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{route('post.show', $post)}}">{{$post->title}}</a>
            </li>
        @endforeach
    </ul>
@endsection
