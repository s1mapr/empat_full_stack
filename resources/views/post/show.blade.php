@extends('layout.layout')

@section('title', 'Пост')

@section('content')
    <h2>Пост {{$post->title}}</h2>
    <p>{{$post->content}}</p>

    <h3>Теги цього поста</h3>
    <ul>
        @foreach($post->tags as $tag)
            <li>
                <a href="{{route('tag.show', $tag)}}">{{$tag->name}}</a>
            </li>
        @endforeach
    </ul>

    <h3>Категорія посту:</h3>
    <a href="{{route('category.show', $post->category)}}">{{$post->category->name}}</a>
@endsection
