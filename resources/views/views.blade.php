@extends('layouts.standard')

@section('content')
<h1 style="text-align: center">Views e Blade</h1>

<h2>Introdução</h2>
<p>As views são as partes no qual colocamos o HTML e toda parte visual de nossas aplicações</p>

<h2>O Blade</h2>
<p>O Blade é uma engine de templates para o front-end do Laravel que facilita e moderniza a integração de variáveis e métodos PHP 
    no front-end. Uma chamada de variável pode ser tão simples como digitar <code> @{{$variável}}</code>. Uma função de if/else ficaria algo como:
    <pre>
    @@if (count($records) === 1)
        I have one record!
    @@elseif (count($records) > 1)
        I have multiple records!
    @@else
        I don't have any records!
    @@endif
    </pre>
</p>
<p>O Blade também adiciona uma função de layouts bem interessante, podemos criar layouts padrões para nossas páginas e 
    mudar somente seções específicas delas. Para ler mais sobre o Blade clique <a href="https://laravel.com/docs/9.x/blade">AQUI</a>
</p>

@endsection