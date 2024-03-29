<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController;

// Custom login
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Logged-in area
Route::group(['middleware'=>'auth'],function(){
    // Welcome
    Route::get('/', [CustomAuthController::class, 'dashboard']);
    // Last
    Route::get('/admin/treinos/ultimostreinos',['as'=>'treinos.ultimostreinos', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@ultimostreinos']);
    // Users
    Route::get('/users', [CustomAuthController::class, 'index']);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // Home
    Route::get('/home', [CustomAuthController::class, 'dashboard'])->name('home');
    // Alunos
    Route::get('/admin/alunos',['as'=>'admin.alunos', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@index']);
    Route::get('/admin/alunos/{id}', ['as'=>'alunos.visualizar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@visualizar']);
    Route::get('/admin/alunos/editar/{id}',['as'=>'admin.alunos.editar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@editar']);
    Route::put('/admin/alunos/atualizar/{id}',['as'=>'admin.alunos.atualizar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@atualizar']);
    Route::get('/alunos/adicionar',['as'=>'alunos.adicionar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@adicionar']);
    Route::post('/admin/alunos/salvar',['as'=>'admin.alunos.salvar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@salvar']);
    Route::get('/admin/alunos/deletar{id}',['as'=>'alunos.deletar', 'uses'=>'App\Http\Controllers\\Admin\AlunoController@deletar']);
    // Treinos
    Route::get('/treinos/visualizarlista/{id}',['as'=>'treinos.visualizarlista', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@visualizarlista']);
    Route::get('/admin/treinos/editar/{id}',['as'=>'admin.treinos.editar', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@editar']);
    Route::put('/treinos/atualizar/{id}',['as'=>'treinos.atualizar', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@atualizar']);
    Route::get('/admin/treinos/adicionar{id}',['as'=>'admin.treinos.adicionar', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@adicionar']);
    Route::get('/admin/treinos/deletar{id}',['as'=>'treinos.deletar', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@deletar']);
    Route::get('/admin/treinos',['as'=>'admin.treinos', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@index']);
    Route::post('/admin/treinos/salvar',['as'=>'admin.treinos.salvar', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@salvar']);
    Route::get('/admin/treinos/visualizar{id}',['as'=>'admin.treinos.visualizar', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@visualizar']);
    // Visão geral
    Route::get('/admin/treinos/visaogeral{id}',['as'=>'admin.treinos.visaogeral', 'uses'=>'App\Http\Controllers\\Admin\TreinoController@visaogeral']);

});
