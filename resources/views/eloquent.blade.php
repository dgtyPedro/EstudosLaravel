@extends('layouts.standard')

@section('content')
<h1 style="text-align: center">Eloquent ORM e Models</h1>
<h2>Models</h2>
<p>
    Os Models são a parte de sistemas MVC que cuidam da conexão da DB, por mais que o Laravel permita fazer Querys através do Controller 
    o recomendado sempre é usar o sistemas de Models e Eloquent ORMs.
</p>
<hr/>
<h2>Eloquent ORM</h2>
<p>
    O Eloquent é um object-relational mapper (ORM), traduzindo, um Mapeador de objeto-relacional, ele fornece uma sintaxe simples e 
    elegante que facilita a interação do Controller com o Banco De Dados.
</p>
<div class="row" style="width: 100%; ">
    <div class="col" style="width: 100%; margin-right: 1vw; border-right: 2px solid white;">
        <h3>Sintaxe com uma Query de Controlador comum:</h3>
    $sql=DB::table('roadmap')<br/>->where('id', '=', $_GET['id'])<br/>->delete();
    </div>
    <div class="col" style="width: 100%; margin-left: 1vw; ">
        <h3>Sintaxe com um Model usando Eloquent ORM</h3>
$sql = Roadmap::find($_GET['id']);<br/>
$sql->delete();

    </div>
</div>
@endsection

