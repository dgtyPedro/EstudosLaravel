@extends('layouts.standard')

@section('content')

<h1 style="text-align: center">Estrutura</h1>
<h2>Introdução</h2>
<p>Nesse tópico irei falar sobre a estrutura de arquivos e o workflow do Laravel. Vindo do CodeIgniter (Algo que nessa altura devo ter 
    mencionado milhares de vezes) já estava esperando encontrar a estrutura MVC de sempre, mas o Laravel é bem mais rechunchudo que o Igniter, 
    parte deve ser pelo fato que como programador eu evoluí nesse meio tempo e já entrei no Laravel mais maduro e com sede de coisas mais complexas mas a 
    "obrigatoriedade" de usar rotas, a adição do blade como uma ferramenta poderosa entre outras ferramentas mostra a complexidade e sofisticadez do Laravel.   
</p>
<hr/>
<div class="row">
    <div class="column">
    <h2>Laravel</h2>
    <img src="{{asset ('img/laravel.png')}}"/>
    </div>
    <div class="column">
    <h2>Igniter</h2>
    <img src="{{asset ('img/codeigniter.png')}}"/>
</div>
</div>
<hr/>

<h2>Sobre as pastas</h2>
<p>Eu poderia ficar aqui falando sobre o que cada partezinha do Laravel faz mas o <a href="https://blog.especializati.com.br/">blog especializati</a> fez um trabalho muito legal já. Irei 
    linkar a leitura <a href="https://blog.especializati.com.br/estrutura-do-framework-php-laravel/" style="text-decoration:underline;">AQUI</a> caso seja de interesse. Mas de cara conseguimos já 
    ver a robustez geral das pastas do Laravel, por mais que eu gostei mais da organização geral do CI4, onde as pastas de controllers, models e views se localizam dentro de uma pasta comum ao contrário do 
    Laravel onde elas estão espalhadas pela root o Laravel consegue atender todas as necessidades e muitas das vezes até melhor que o Igniter. No início pode ser um pouco mais confuso tendo em vista que a curva de aprendizagem é consideravelmente maior 
    mas esse esforço se paga com projetos mais sofisticados. 
</p>
@endsection
