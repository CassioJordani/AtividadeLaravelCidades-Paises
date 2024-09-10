<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>App países e cidades</h1>
            <div class="container">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('sobreNos') }}">Sobre Nós</a>
                <a href="{{ route('contato') }}">Contato</a>
                <a href="{{ route('paises.index') }}">Paises e cidades</a>
            </div>
        </div>
        @yield('content')
        <div class="footer">
            <p>&copy; 2024 - Todos os direitos reservados</p>
        </div>
    </div>
</body>
</html>
