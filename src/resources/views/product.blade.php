@extends('layout')

@section('title', 'Деталі продукту')

@section('content')
    <h1>Деталі продукту</h1>
    @if($product)
        <p><strong>Назва:</strong> {{ $product['name'] }}</p>
        <p><strong>Ціна:</strong> {{ $product['price'] }}</p>
        <p><strong>Опис:</strong> {{ $product['description'] }}</p>
    @else
        <p>Продукт не знайдено.</p>
    @endif
@endsection
