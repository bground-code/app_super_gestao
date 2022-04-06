<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso!';
});
*/
Route::get('/', 'PrincipalController@principal')->name('site.index');
//primeiro foi passado a classe@metodo o framework já entende que é o retorno de metodo
Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');
   
Route::get('/contato', 'ContatoController@contato' )->name('site.contato'); 

Route::get('/login' , function() { return  'login'; })->name('site.login');


Route::prefix('/app')->group(function(){
Route::get('/clientes' , function() { return  'clientes'; })->name('app.clientes');
Route::get('/fornecedores' , function() { return  'fornecedores'; })->name('app.fornecedores');
Route::get('/produtos' , function() { return  'produtos'; })->name('app.produtos');
});

Route::get('/rota1', function(){
    echo 'rota1'; 
})->name('site.rota1');



Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::fallback( function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});
                   
//                    origem     destino
//Route::redirect('/rota2' , '/rota1');
//forma para colocar na rota


//nome, categoria, assuntro, menssagem


//function(
  //   string $nome = 'Desconhecido', 
    // int $categoria_id = 1  // 1 - 'informacao'
     
   //  ) {

    //echo "estamos aqui: $nome -  $categoria_id ";

  //  }
//)->where('categoria_id' , '[0-9]+' );
// passar mais um parametro - funcao de callback
// Para definir um parametro na rota
// /contato{parametro}
// para armazenar o parametro crie uma variavel 
// dentro da funcao function($variavelrecebep)


//Caso não seja informado o parametro da requisicao
// é possivel definir uma mensagem ou aviso com $mensagem? 
// lembre que precisa criar a requisiao e receber mesmo assim
// $mensagem = 'valor n informado'

// cuidado ao trabalhar com multplos parametros, o laravel
//consegue entender da direta para esquerda 


//trando expressoes regulares, para que o paramtros precisam ser numeros ou string









/*
Princiṕais verbos para controlar as requisoões HTTP
serve para servidor 
get 
post 
putch
delete
options
Route::(precisa ser a uri ex $uri, $callback, depois uma ação a ser tomada)

*/