@extends('layout.layout')

@section('title', 'Категорія')

@section('content')
    <h2>Всі пости за категорією {{$category->name}}</h2>
    <ul>
        @foreach($category->posts as $post)
            <li>
                <a href="{{route('post.show', $post)}}">{{$post->title}}</a>
            </li>
        @endforeach
    </ul>
@endsection
