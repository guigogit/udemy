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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('produtos', function () {
    return view('outras.produtos');
})->name('produtos');

Route::get('departamentos', function () {
    return view('outras.departamentos');
})->name('departamentos');

Route::get('nome', 'MeuControlador@getNome');
Route::get('idade', 'MeuControlador@getIdade');
Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

//função usada para associar todos os metodos. (Lincar rota com controlador).
Route::resource('clientes', 'ClienteControlador');
Route::get('opcoes/{opcao?}', function($opcao=null){
    return view('outras.opcoes',compact(['opcao']));

})->name('opcoes');

//Route::get('/ola/sejabemvindo',function(){

//echo "Olá! Seja bem vindo.";


//});

//Route::get('/ola/{nome}/{sobrenome}',function($nome,$sobrenome){

  //  echo "Olá! Seja bem vindo,". $nome.$sobrenome. "!";


    //});



//Route::get('/seunome/{nome?}',function($nome=null){
  //  if(isset($nome)){
    //    echo "Olá! Seja bem vindo,". $nome."!";
    //}
    //else{
        //echo "Você não digitou nenhum nome!";
   // }

//});
/*
Route::get('/seunome/{nome?}',function($nome=null){
    if(isset($nome)){
        return "Olá! Seja bem vindo,". $nome."!";
    }
    else{
        return "Você não digitou nenhum nome!";
    }

});

Route::get('/rotacomregras/{nome}/{n}', function($nome,$n){
    for($i=0;$i<$n;$i++){
        echo "Olá! Seja bem vindo, $nome! <br> ";
    }

    })->where('nome','[A-Za-z]+')
      ->where('n','[0-9]+');

// Agrupamento de rotas
// Nomeando rotas
Route::prefix('/aplicacao')->group(function(){
    Route::get('/',function(){
        return view('app');
    })->name('app');

    Route::get('/user',function(){
        return view('user');
    })->name('app.user');

    Route::get('/profile',function(){
        return view('profile');
    })->name('app.profile');

});

Route::get('/produtos', function(){
    echo "<h1>Produtos</h1>";
    echo "<ol>";
        echo"<li>Notebook</li>";
        echo"<li>Impresora</li>";
        echo"<li>Mouse</li>";
    echo "</ol>";
})->name('meusprodutos');

// Quando usamos o redirect, todos os metodos são redirecionados para a nova rota
Route::redirect('todosprodutos1','produtos',301);

Route::get('todosprodutos2', function(){
    return redirect()->route('meusprodutos'); // utilizano o name da minha rota

});

/////////////////////////////////

Route::post('/requisicoes', function (Request $request) {
 return 'Hello POST';

});

Route::delete('/requisicoes', function (Request $request) {
    return 'Hello DELETE';

   });


   Route::put('/requisicoes', function (Request $request) {
    return 'Hello PUT';

   });



   Route::patch('/requisicoes', function (Request $request) {
    return 'Hello PATCH';

   });

   Route::options('/requisicoes', function (Request $request) {
    return 'Hello OPTIONS';

   });


   Route::get('/requisicoes', function (Request $request) {
    return 'Hello GET';

   });

   //lARAVEL TRABALHAR COM MVC (MODEL-VIEW-CONTROLLER

*/


?>
