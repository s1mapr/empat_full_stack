<?php

use app\RequestWrapper;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = RequestWrapper::post('name');
    $password = RequestWrapper::post('password');

    if ($name !== null && $password !== null) {
        $_SESSION['name'] = $name;
        setcookie('user_id', $name, time() + (86400 * 30), '/');
        header('Location: ?page=home');
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Логін</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .div-form {
            width: 40%;
            height: 40%;
            border: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            width: 80%;
            padding: 30px 100px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        form input {
            height: 30px;
        }

        form button {
            font-size: 20px;
            border: none;
            height: 40px;
            background-color: #0bc80b;
            color: white;
        }
    </style>
</head>

<body>
<div class="div-form">
    <form method="post">
        <label for="name">Name</label>
        <input id="name" type="text" name="name" placeholder="Enter name here">
        <label for="password">Password</label>
        <input id="password" type="password" name="password" placeholder="Enter password here">
        <button type="submit">Login</button>
    </form>
</div>
</body>

</html>