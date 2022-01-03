@extends('layouts.standard')

@section('content')
<h1 style="text-align: center">Rotas</h1>
<h2>Introdução</h2>
<p>Quando falamos sobre rotas no Laravel queremos falar sobre o conjunto de "funções" que determina o que será retornado quando uma 
    forma de acesso for feita no Laravel. Quando digo acesso podemos serapa-los em 4 tipos. 
</p>
<h3>- Acesso por API</h3>
<p> Nesse caso usamos o arquivo <code>/routes/api.php</code> que controla as respostas e ações do Laravel quando acessado como uma API.

<h3>- Acesso por Canais</h3>
<p>Usando o <code>/routes/channels.php</code> esse foi o único tipo no qual não utilizei praticamente, mas trocando em miúdos é utilizado quando 
é necessário o uso de WebSockets no Laravel.</p>

<h3>- Acesso pelo Console</h3>
<p>Usando o <code>/routes/console.php</code> através do artisan é possível programar respostas para comandos no terminal da aplicação, 
como exemplo o próprio Laravel já da uma rota feita, digitando <var style="color: #FF2D20">php artisan inspire</var> em um terminal dentro da pasta 
da aplicação é retornado uma "frase inspiradora" pega  pelo Laravel e por sua rota <var style="color: #FF2D20">
    Artisan::command('inspire', function () {[...]}
</var>.</p>

<h3>- Acesso pela Web</h3>
<p>Esse é disparado o uso mais comum, aqui controlamos as ações realizadas pelo app após o acesso da url específica pelo usuário. Seguindo o 
    mesmo padrão anterior mostrado dentro de <code>/routes/web.php</code> conseguimos codar os retornos que cada página ira nos dar. Essa página mesmo tem uma rota que a controla, 
    com <var style="color: #FF2D20">Route::get('/rotas', [Home::class, 'rotas']);</var> nós dizemos que quando o usuário acessar a página 
    {{url('/')}}/rotas o Laravel deverá entrar no <code>Controller Home</code> e rodar a função <code>rotas()</code> que é responsável por gerar essa página no navegador do usuário através da <code>View</code>.

</p>
<p>
    Aqui já vemos como realmente todas as etapas estão interligadas e como as Rotas são de extrema importância para o funcionamento da aplicação.
</p>

@endsection