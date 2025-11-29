<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio - Kazi Tawhid Ibn Monir')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.navbar')

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
