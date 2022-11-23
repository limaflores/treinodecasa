<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    // return view('welcome');
    $user = \App\Models\User::find(1);
    // $usr = \App\Models\Aluno::find(1);

    return $user->aluno();
    // dd( $user->aluno()->count() );
    // return $usr->treinos()->where('id', 1)->get();

    // $iddabase = $user->aluno->create[[
    //     'nome_aluno' => 'Teste 2',
    //     'data_nascimento' => '',
    //     'email' => 'teste2@gmail.com',
    //     'objetivo' => '',
    //     'frequencia' => '',
    //     'descricao' => '',
    //     'nivel_treinamento' => '',
    //     'observacoes' => '',
    //     'lesoes' => '',
    //     'slug' => ''
    // ]];

    // dd($iddabase);

});

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





// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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




