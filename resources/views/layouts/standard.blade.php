<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ secure_asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Estudos Laravel</title>

    <link rel="apple-touch-icon" sizes="180x180" href="https://laravel.com/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://laravel.com/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://laravel.com/img/favicon/favicon-16x16.png">

    <link rel="stylesheet" href="{{ secure_asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b0c45caebd.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="sidebar">
        <ul>
            <li>
                <h1 style="font-size: 25px; color: #FF2D20;"><i class="fab fa-laravel"></i> EstudosLaravel</h1>
            </li>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="estrutura">Estrutura</a>
            </li>
            <li>
                <a href="rotas">Rotas</a>
            </li>
            <li>
                <a href="controllers">Controllers</a>  
            </li>
            <li>
                <a href="views&blade">Views e Blade</a> 
            </li>
            <li>
                <a href="crud">Crud Simples</a> 
            </li>
            <li>
                <a href="eloquent">Eloquent ORM e Models</a> 
            </li>


        </ul>
    </div>
    <div class="main">
    @if(isset($easteregg))
        <p>Boo, eu sou um easteregg dentro de um if no blade</p>
    @endif
        @yield('content')
    </div>
</body>
</html>