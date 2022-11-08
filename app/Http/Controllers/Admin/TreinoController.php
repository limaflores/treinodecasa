<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Treino;

class TreinoController extends Controller
{
    //
    public function index()
    {
        $registros = Treino::all();
        return view('admin.treinos.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.treinos.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        
        Treino::create($dados);

        return redirect()->route('admin.treinos');
    }

    public function editar($id)
    {
      $registro = Treino::find($id);
      return view('admin.treinos.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        
        Treino::find($id)->update($dados);

        return redirect()->route('admin.treinos');
    }

    public function deletar($id)
    {
        Treino::find($id)->delete();
      return redirect()->route('admin.treinos');
    }

}
