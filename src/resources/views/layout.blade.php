<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        form{
            width: 25%;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .header{
            width: 100%;
        }
    </style>
</head>
<body>
<div class="header">
    <a href="/products">Всі товари</a>
    <a href="/products/create">Створити товар</a>
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>
