@extends('layout.layout')

@section('title', 'Всі категорії')

@section('content')
    <h2>Всі категорії</h2>
    <ul>
        @foreach($categories as $category)
            <li>
                <a href="{{route('category.show', $category)}}">{{$category->name}}</a>
            </li>
        @endforeach
    </ul>
@endsection
