<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('titre')</title>
</head>
<body>
    @include('header')
    @yield('contenu')
    @include('footer')
</body>
</html>