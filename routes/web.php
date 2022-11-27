<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController;



// Welcome
// Route::get('/', [CustomAuthController::class, 'index'])->name('home.index');
Route::get('/', [CustomAuthController::class, 'dashboard']);








//Route::get('/login/sair',['as'=>'site.login.sair', 'uses'=>'App\Http\Controllers\\Site\LoginController@sair']);
Route::get('/users', [CustomAuthController::class, 'index']);
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


// About
Route::get('/about', function () {return view('about');})->name('about');


//Protege as rotas para serem usadas somente por usuário logado.
Route::group(['middleware'=>'auth'],function(){

    // Home
    Route::get('/home', [CustomAuthController::class, 'dashboard'])->name('home');
    Route::get('/admin/alunos',['as'=>'admin.alunos', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@index']);
    Route::get('/admin/alunos/{id}', ['as'=>'alunos.visualizar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@visualizar']);
    Route::get('/admin/alunos/editar/{id}',['as'=>'admin.alunos.editar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@editar']);
    Route::put('/admin/alunos/atualizar/{id}',['as'=>'admin.alunos.atualizar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@atualizar']);

    // Route::get('/admin/alunos/editar{id}', function () {return view('/admin/alunos/editar');})->name('admin.alunos.editar');
    // Route::get('/alunos/index',['as'=>'admin.alunos.adicionar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@index'])->name('alunos.index');
    // Route::get('/admin/alunos/{id}', [AlunoController::class, 'visualizar'])->name('alunos.visualizar');


    Route::get('/admin/alunos/adicionar',['as'=>'admin.alunos.adicionar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@adicionar']);
    Route::post('/admin/alunos/salvar',['as'=>'admin.alunos.salvar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@salvar']);
    Route::get('/admin/alunos/deletar{id}',['as'=>'admin.alunos.deletar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@deletar']);
    Route::get('/admin/alunos/visualizar{id}',['as'=>'admin.alunos.visualizar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@visualizar']);
//    Route::get('/admin/alunos/visualizar{id}',['as'=>'admin.alunos.vertreinos', 'uses'=>'Admin\AlunoController@vertreinos']);


//    Route::get('/admin/treinos',['as'=>'admin.vertreinos', 'uses'=>'Admin\TreinoController@vertreinos']);
    Route::get('/admin/treinos/visualizarlista{id}',['as'=>'admin.treinos.visualizarlista', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@visualizarlista']);

    Route::get('/admin/treinos',['as'=>'admin.treinos', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@index']);

//    Route::get('/admin/treinos/adicionar',['as'=>'admin.treinos.adicionar', 'uses'=>'Admin\TreinoController@adicionar']);
    //Route::get('/admin/treinos/adicionar',['as'=>'admin.treinos.adicionar', 'uses'=>'Admin\TreinoController@adicionar']);

    Route::get('/admin/treinos/adicionar{id}',['as'=>'admin.treinos.adicionar', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@adicionar']);

    Route::post('/admin/treinos/salvar',['as'=>'admin.treinos.salvar', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@salvar']);

    Route::get('/admin/treinos/editar{id}',['as'=>'admin.treinos.editar', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@editar']);

    Route::put('/admin/treinos/atualizar{id}',['as'=>'admin.treinos.atualizar', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@atualizar']);

    Route::get('/admin/treinos/deletar{id}',['as'=>'admin.treinos.deletar', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@deletar']);
    Route::get('/admin/treinos/visualizar{id}',['as'=>'admin.treinos.visualizar', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@visualizar']);

});
