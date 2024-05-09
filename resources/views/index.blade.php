<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/index.css') }}" rel="stylesheet">
    <title>Club de Conquistadores</title>
</head>
<body>
    <div class="Wrapper">
        <div class="MainLayout">
            <nav>
                <img class="LogoNav" src="{{ asset('/imgs/logo.webp') }}"></img>
                <div class="NavOption1" onclick="window.location.href = '/registro';">
                    Registrarse
                    <svg class='IconArrow' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
                </div>
                <div class="NavOption2" onclick="window.location.href = '/login';">
                    Iniciar Sesión
                    <svg class='IconArrow' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
                </div>
            </nav>
            <header>
                <h1>Club</h1>          
                <h2>Conquistadores</h2>
            </header>
            <section></section>
            <footer></footer>
        </div>
        <aside>
            <img class="LogoAside" src="{{ asset('/imgs/logo2.webp') }}"></img>
        </aside>
    </div>
</body>
</html>