<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Aluno;

class AlunoController extends Controller
{
    //
    public function index()
    {
        $registrosAlunos = Aluno::all();
        return view('admin.alunos.index', compact('registrosAlunos'));
    }

    public function adicionar()
    {
        return view('admin.alunos.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Aluno::create($dados);
        return redirect()->route('admin.alunos');
    }

    public function editar($id)
    {
      $registrosAlunos = Aluno::find($id);
      return view('admin.alunos.editar',compact('registrosAlunos'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();

        Aluno::find($id)->update($dados);

        return redirect()->route('admin.alunos');
    }

    public function deletar($id)
    {
        Aluno::find($id)->delete();
        return redirect()->route('admin.alunos');
    }

    // public function visualizar($id)
    // {
    //
    //     return view('admin.alunos.visualizar', compact('registrosAlunos'));
    // }
    public function visualizar($id){
        if (!$registrosAlunos = Aluno::find($id))
            return redirect()->route('admin.alunos');

        return view ('admin.alunos.show', compact('registrosAlunos'));
    }


}
