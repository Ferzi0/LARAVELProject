<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->

            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >
        <h1>Знакомство с Laravel</h1>
        <a href="{{route('second')}}">Вторая страница</a>
        <a href="{{route('third')}}">Третья страница</a>
        <div class="container">
            @for ($i=1; $i<=9; $i++)
                <div class="card">
                    <h2>Товар {{$i}}</h2>
                    <img src="{{ Vite::asset('resources/img/cats-'.$i.'.jpg') }}">
                    <p>описание товара</p>
                    @if($i % 2 == 0)
                        <p class="new">Новинка</p>
                    @endif
                    <button>Купить</button>
                    <button>Описание породы</button>
                </div>
            @endfor
        </div>
    </body>
</html>
