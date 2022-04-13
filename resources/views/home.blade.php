@extends('layouts.standard')


@section('content')
        <h1 style="text-align: center">Home</h1>
        <h2>Introdução</h2>
        <p>Oi, eu sou o Pedro e esse é meu repositório sobre Laravel, assim como eu fiz com o Igniter aqui eu vou contar um pouquinho sobre 
            oque aprendi nessas semanas que venho estudando Laravel.
        </p>
        <hr/>
        <h2>Sintaxe e Estrutura</h2>
        <p>Fiquei surpreso de como a sintaxe do Laravel é parecida com a do Igniter, claro ambos são frameworks PHP MVC então não tinha como fugir muito 
            entretanto é bem semelhante como ambos frameworks lidam com todo padrão MVC, isso facilitou muito meu aprendizado já que 
            tendo vindo do Igniter eu já passei por esse processo de aprendizagem. 
        </p><p>Sobre a parte de estrutura mesmo 
            eu já tendo conhecimento de como funciona uma aplicação MVC de início fiquei surpreso com a estrutura das pastas 
            no Laravel. No Igniter tinhamos as pastas Controladores, Models, e Views tudo em uma pasta raiz só, aqui no Laravel esses componentes ficam 
            mais distantes um dos outros, os Controladores ficam em app/Http/Controllers, as Views são encontradas na pasta resources e os Models ficam em app/ assim como 
            a pasta Http. No início da pra ficar um pouquinho perdido mas com o costume e treino é fácil pegar o jeito.  
        </p>
        <hr/>
        <h2>Por que usar e aprender Laravel</h2>
        <p>O Laravel é um framework extremamente potente que é usado pra fazer grande parte dos sistemas institucionais Brasil a fora o que o torna quase 
            como um conhecimento obrigatório para o PHP developer.
        </p>
        <hr/>
        <h2>Em comparação com o CodeIgniter...</h2>
        <p>Gosto muito do Igniter mas aprendendo Laravel vejo como ele realmente é um framework mais robusto e completo, muitas linhas de 
            código são economizadas aqui pelo número de funções e bibliotecas proporcionadas pelo Laravel, algo que não acontecia tão frequentemente como 
        o CI4. O CodeIgniter pode ser melhor para fazer aplicações menores, sistemas simples mas para qualquer projeto realmente sério e grande o Laravel parece 
    a melhor opção.</p>
        <hr/>
        <h2>E o Lumen?</h2>
        <p>O Lumen é um framework criado pela mesma empresa do Laravel porém mais "portátil", é ótimo para aplicações de uma só função.
        </p>
@endsection            