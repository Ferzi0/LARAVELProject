<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <a href="{{route('welcome')}}">Home</a>
    </header>
    <div class="container">
        @foreach($array as $item)
            <div class="card">
                <h3>{{ $item['title'] }}</h3>
                <p>Цена: {{ $item['price'] }}</p>
                <img src="{{ Vite::asset('resources/img/' . $item['path']) }}" alt="{{ $item['title'] }}">
            </div>
        @endforeach
    </div> 
</body>
</html>