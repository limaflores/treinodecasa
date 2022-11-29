<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Treino;
use App\Aluno;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            $users = User::count();

            $widget = [
                'users' => $users,
            ];
            // return view('auth.dashboard');
            // Number alunos and treinos
            $id_usuario = (Auth::user()->id);
            $nome_prof = Auth::user()->name;
            // $n_treinos = Treino::all()->count();
            // $n_alunos = Aluno::all()->count();
            $n_treinos = DB::table('treinos')
            ->join('alunos', 'treinos.aluno', '=', 'alunos.id')
            ->where('alunos.professor', '=', $id_usuario)
            ->select('treinos.*')
            ->count();
            $n_alunos = DB::table('alunos')->where('professor', $id_usuario)->count();

            return view('home/home', compact('widget', 'n_treinos', 'n_alunos', 'nome_prof'));
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
