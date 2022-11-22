<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    //
    public function index()
    {
        // $registros = Aluno::all();
        // return view('admin.alunos.index', compact('registros'));
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
      $registro = Aluno::find($id);
      return view('admin.alunos.editar',compact('registro'));
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
}
