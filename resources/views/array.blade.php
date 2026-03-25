<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список товаров</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <header>
        <nav>
            <a href="{{ route('home') }}">Главная</a> 
           
        </nav>
        <h1>Наши товары</h1>
    </header>

    <div>
        <a href="{{ route('array.shuffle') }}" style="margin: 0 10px;">Перемешать</a>
        <a href="{{ route('array.sort') }}" style="margin: 0 10px;">Сортировать по цене</a>
        <a href="{{ route('array.filter') }}" style="margin: 0 10px;">Дороже 1000 ₽</a>
    </div>

    <main class="product-grid">
        @foreach($array as $item)
            <div class="card">
                <img src="{{ asset('img/' . $item['path']) }}" alt="{{ $item['title'] }}">
                <h3>{{ $item['title'] }}</h3>
                <p>Цена: {{ $item['price'] }} ₽</p>
            </div>
        @endforeach
    </main>

    <footer>
        <p>&copy; Пашков Владислав, 2026</p>
    </footer>

</body>
</html>