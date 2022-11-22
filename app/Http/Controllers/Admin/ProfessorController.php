<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    //
    public function index(){
        $professores = \App\Models\Professor::all();
        // return $professores;
        return view('admin.professores.index', compact('professores'));
    }

    public function create(){
        return view('admin.professores.create');
    }

    public function save(Request $request){
        dd($request->all());
    }


}
