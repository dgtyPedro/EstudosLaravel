@extends('layouts.standard')

@section('content')

<h1 style="text-align: center">Controllers</h1>
<h2>Introdução</h2>
<p>Esta seção é provavelmente a parte onde os desenvolvedores vão gastar a maior parte do tempo mexendo. Os controllers são os responsáveis, em sistemas MVC, 
    por literalmente "controlar" as interações tanto do front quanto do back-end do sistema, esses controladores atuam como o "middle man" 
no Laravel, fazendo toda a logística, pegando dados nos Models e enviando váriaveis pro front-end.</p>

<h2>Utilidades</h2>
<p>Os controllers em si podem fazer (removendo a declaração de rotas) qualquer ação, o desenvolvedor pode facilmente fazer tanto o 
    back-end quanto o front-end nas funções dos controladores, entretanto essa ação pode deixar o código bem sujo e é por isso que existe tanto as views 
    quanto os models e por isso um controller ideal se "limita" a realmente ser o middleman entre o front e o back-end fazendo 
    todas as funcionalidades tão essenciais para um sistema web atual.
</p>

<h2>Exemplo</h2>
<img src="{{asset('img/codepretty.png')}}" style="width: 50%"/>

@endsection