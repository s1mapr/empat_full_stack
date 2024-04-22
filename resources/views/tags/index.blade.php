@extends('layout.layout')

@section('title', 'Всі теги')

@section('content')
    <h2>Всі теги</h2>
    <ul>
        @foreach($tags as $tag)
            <li>
                <a href="{{route('tag.show', $tag)}}">{{$tag->name}}</a>
            </li>
        @endforeach
    </ul>
@endsection
