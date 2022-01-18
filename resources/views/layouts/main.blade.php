<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Será substituido pelos títulos das páginas. --}}
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    {{-- Será substituido pelos conteúdos das páginas. --}}
    @yield('content')

    <footer>
        <p>HDC Events &copy; 2022.</p>
    </footer>

    <script src="/js/script.js"></script>
</body>
</html>
