<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/css/styles.css" />


    <title>@if (!empty($title))
            ChaT | {{$title}}
        @else
            ChaT
        @endif</title>
</head>
<body>
<div class="wrapper">
<div class="header">
        <div class="menu">
            @if (!empty(Auth::user()))
                <a href="/users/" class="btn">Список пользователей</a>
                <a href="/message/" class="btn">Чат</a>
                <a href="/user/show/update/" class="btn">Изменить данные пользователя</a>
                <a href="/user/show/delete/" class="btn">Удалить пользователя</a>
                @else
                <a href="/" class="btn">Главная</a>
                <a href="/registration/" class="btn">Регистрация</a>
            @endif

            </div>
        <div class="user-info">
            @if (!empty(Auth::user()))
                <span>{{Auth::user()->name}}</span>
                <a href="/logout/" class="btn">Выйти</a>
            @endif
        </div>
</div>
</div>
