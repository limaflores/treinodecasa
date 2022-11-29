<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Aluno;
class AlunoController extends Controller
{
    //
    public function index()
    {
        //$registros = DB::table('treinos')->where('aluno', $id)->get();
        // $registrosAlunos = Aluno::all();
        $id = (Auth::user()->id);
        $registrosAlunos = Aluno::all()->where('professor', $id);
        return view('admin.alunos.index', compact('registrosAlunos'));
    }

    public function adicionar()
    {
        $id = (Auth::user()->id);
        return view('admin.alunos.adicionar', compact('id'));
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        Aluno::create($dados);
        return redirect()->route('admin.alunos');
    }

    public function editar($idrecebido)
    {
        $id = (Auth::user()->id);
        $registrosAlunos = Aluno::find($idrecebido);
        return view('admin.alunos.editar',compact('registrosAlunos', 'id'));
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

    public function visualizar($id){
        if (!$registrosAlunos = Aluno::find($id))
            return redirect()->route('admin.alunos');

        return view ('admin.alunos.show', compact('registrosAlunos'));
    }

}
