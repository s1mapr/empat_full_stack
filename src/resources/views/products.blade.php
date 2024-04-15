@extends('layout')

@section('title', 'Усі продукти')

@section('content')
    <h1>Усі продукти</h1>
    <ul>
        @foreach($products as $product)
            <li><a href="/products/{{ $product['id']}}">{{ $product['name'] }}</a> - {{ $product['price'] }}</li>
        @endforeach
    </ul>
@endsection
