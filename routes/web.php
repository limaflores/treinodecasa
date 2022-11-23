<?php

use App\Http\Controllers\{
    HomeController
};

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

// Welcome
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Route::get('/model', function () {
//     // $alunos = \App\Models\Aluno::all(); // select * from alunos
//     // return $alunos;

//     $professor = \App\Models\Professor::find(1);
//     // return $professor->alunos->count();
//     // return $professor->alunos;
//     return $professor->alunos()->where('id', 1)->get();

//     // return \App\Models\User::all();
// });

// Route::get('/admin/professores', 'App\Http\Controllers\Admin\\ProfessorController@index');
// Route::get('/admin/professores/create', 'App\Http\Controllers\Admin\\ProfessorController@create');
// Route::post('/admin/professores/save', 'App\Http\Controllers\Admin\\ProfessorController@save');

Route::get('/admin/alunos', 'App\Http\Controllers\Admin\\AlunoController@index');
Route::get('/admin/alunos/adicionar', 'App\Http\Controllers\Admin\\AlunoController@adicionar');
Route::post('/admin/alunos/salvar', 'App\Http\Controllers\Admin\\AlunoController@salvar');




