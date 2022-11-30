<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Treino;
use App\Aluno;
use DB;
use Illuminate\Support\CollectionstdClass;

class TreinoController extends Controller
{
    //
    public function index()
    {
        // order by desceding
        // $registros = Treino::orderBy('id', 'desc')->get();
        $results = Treino::all()->sortByDesc("id");
        // $registros = Treino::all();
        return view('admin.treinos.index', compact('registros'));
    }

    public function adicionar($id)
    {
        //return view('admin.treinos.adicionar');
        //$registros = DB::table('treinos')->where('aluno', $id)->get();
        //$id = DB::table('alunos')->where('id', $id)->get();
        // $id = $id;
        // $nomealuno = DB::table('treinos')
        // ->join('alunos', 'treinos.aluno', '=', 'alunos.id')
        // ->where('treinos.aluno', '=', $id)
        // ->select('alunos.nome as nomealuno')
        // ->get();
        $nomealuno = DB::table('alunos')->where('id', $id)->get();
        $nomealuno = $nomealuno[0]->nome;
        return view('admin.treinos.adicionar', compact('id','nomealuno'));
        //return view('admin.treinos.adicionar');
        //$id = $request->query('id'); // Pega somente o da query string
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();

        Treino::create($dados);
        //Editado em 04/10/19. Aqui é pego o id do aluno (pk) e passado para a rota visualizarlista de treinos do aluno trabalhado.
        $id = $req->aluno;
        return redirect()->route('treinos.visualizarlista', compact('id'));
    }

    public function editar($id)
    {
      $registro = Treino::find($id);
      $aluno = Aluno::find($registro->aluno);
      //   $aluno = DB::table('alunos')->where('id', $id)->get('aluno');
      return view('admin.treinos.editar',compact('registro','aluno'));
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        Treino::find($id)->update($dados);
        //Editado em 04/10/19. Aqui é pego o id do aluno (pk) e passado para a rota visualizarlista de treinos do aluno trabalhado.
        $id = $req->aluno;
        return redirect()->route('treinos.visualizarlista', compact('id'));
    }

    public function deletar($id)
    {
        // Treino::find($id)->delete();
        //$idAluno = DB::table('treinos')->where('aluno', $id)->get();
        //$registros = DB::table('treinos')->where('id', $id)->get('aluno');
        //$id = Treino::find()->aluno->get();
        //$idAluno = Treino::where('id', $id)->get(0);
        //$registros = Treino::find($id);
        //$id = $registros->aluno->get();
        //foreach($registros as $registro){
        //}
        //$idA = $registros->aluno;
        //$id = $idA;
        //Editei aqui de admin.treinos para admin.alunos 04/10/19.
        //return redirect()->route('admin.treinos.visualizarlista', compact('id'));
        $treino = Treino::find($id);
        // dd($idAluno);
        $idAluno = $treino->aluno;
        $aluno = Aluno::find($idAluno);
        // $nomealuno = $aluno->nome;
        // $idaluno = $aluno->id;
        // dd($aluno);
        $idAluno = Treino::find($id)->delete();
        return redirect()->route('treinos.visualizarlista', $aluno);
        // return redirect()->route('admin.alunos');
    }

    public function visualizar($id)
    {
        $registros = Treino::find($id);
        return view('admin.treinos.visualizar', compact('registros'));
    }

    public function visualizarlista($id)
    {
        //$treinos= DB::table('treinos')->where('aluno')->get();
        //Aqui pega os registros do banco de treino onde o campo 'aluno' é igual ao id do aluno em questão.
        // $registros = DB::table('treinos')->where('aluno', $id)->get();
        // $registros = Treino::all()->sortByDesc("id")->where('aluno', $id);
        // $registrosAlunos = DB::table('alunos')->where('id', $id)->get();
        $registrosAlunos = Aluno::all()->where('id', $id);
        // dd($registrosAlunos);
        // $registros = DB::table('treinos')->where('aluno', $id)->orderBy('id','desc')->get();
        $registros = Treino::orderBy('id', 'desc')->where('aluno', $id)->get();
        $numeroregistros = $registros->count();
        // dd($numeroregistros);
        // $registros = Treino::latest('created_at')->get();
        // $id = $id;
        return view('admin.treinos.visualizarlista', compact('registros','id','registrosAlunos', 'numeroregistros'));
    }

    public function ultimostreinos()
    {
        // $registros = Treino::orderBy('id', 'desc')->get();
        // $registrosAlunos = Aluno::all()->where('professor', $id);
        $id = (Auth::user()->id);
        //dd($id);
        $registros = DB::table('treinos')
        ->join('alunos', 'treinos.aluno', '=', 'alunos.id')
        ->where('alunos.professor', '=', $id)
        ->select('alunos.nome as nomealuno', 'treinos.*')
        ->orderBy('id', 'desc')->get();

        $numeroregistros = $registros->count();
        return view('admin.treinos.ultimostreinos', compact('registros','numeroregistros'));
    }

    public function visaogeral($id_aluno)
    {
        // $registros = Treino::orderBy('id', 'desc')->get();
        // $registrosAlunos = Aluno::all()->where('professor', $id);
        $id = (Auth::user()->id);
        $numeroregistros = DB::table('treinos')
        ->join('alunos', 'treinos.aluno', '=', 'alunos.id')
        ->where('alunos.professor', '=', $id)
        ->select('alunos.*', 'treinos.*')
        ->get();
        // dd($registros);
        //$registros = Aluno::all()->where('id', $id_aluno);
        $registros = Aluno::find($id_aluno);
        $numeroregistros = $numeroregistros->count();
        //$registros = $registros[0];
        // $id_aluno = $registros[0]->id;
        //dd($registros);
        return view('admin.treinos.visaogeral', compact('registros','numeroregistros', 'id_aluno'));
    }

}
