<?php
// use App\Http\Controllers\Auth;
// namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//Sistema que vai gerenciar a autenticação do usuário.
use Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index');
    }

    public function entrar(Request $req)
    {
        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
            return redirect()->route('admin.treinos');    
        }

        return redirect()->route('site.login');
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.login');
    }
    
/*
    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
*/
}
