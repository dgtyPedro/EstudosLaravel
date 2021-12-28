<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
</style>
<body>
    Metodo: <?=$method?><br/>
    Url: <?=$url?><br/>
    Nulo: <?=$null?><br/>
    CSRF Token: <?php if (isset($_token)){ echo $_token;}?><br/>
    <p>Seu nome<?php if(isset($nome) && $nome !=''){ echo ": ".$nome;} ?></p>
    <hr/>

    <h3>POST</h3>
    <form method="post">
        <!-- QUANDO POST COLOQUE O CSRF -->
        @csrf
        <input type="text" name="nome">
        <input type="submit">
    </form>
    <hr/>
    <h3>GET</h3>
    <form method="get">
        <!-- QUANDO POST COLOQUE O CSRF -->
        @csrf
        <input type="text" name="nome">
        <input type="submit">
    </form>
<hr/>

<h3>Forma inteligente de mostrar váriaveis com o Blade:</h3>
<p>{{ $variavel }}

</body>
</html>