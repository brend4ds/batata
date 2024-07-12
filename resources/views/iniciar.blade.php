<html>
    <head>
        <title>@yield('titulo')</title>
    </head>
    <body>
        <h1>@yield('titulo')</h1>
        <hr>
        <a href="{{ route('index') }}">Inicial</a>
        <a href="{{ route('animais') }}">Animais</a>
        <a href="{{ route('usuarios') }}">Cadastra-se</a>
        <a href="{{ route('login') }}">Login</a>

        <hr>
        @yield('conteudo')
        <p>Sejam bem-vindos à página inicial</p>
    </body>
</html>