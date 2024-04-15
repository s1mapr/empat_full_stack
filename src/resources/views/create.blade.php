@extends('layout')

@section('title', 'Створення нового продукту')

@section('content')
    <h1>Створення нового продукту</h1>
    <form action="/products" method="POST">
        <label for="name">Назва:</label>
        <input type="text" id="name" name="name" required>
        <label for="price">Ціна:</label>
        <input type="number" id="price" name="price" required>
        <label for="description">Опис:</label>
        <textarea id="description" name="description" required></textarea>
        <button type="submit">Створити</button>
    </form>
@endsection
