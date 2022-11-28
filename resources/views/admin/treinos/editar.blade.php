@extends('layouts.admin')

@section('main-content')

<div class="container">
    <h1 class="center">Editar treino</h1>
    <h5>Aluno {{ $aluno->nome }}</h5>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <form class="" action="{{route('treinos.atualizar',$registro->id)}}" method="post">
                    {{ csrf_field()}}
                    <input type="hidden" name="_method" value="put">
                    @include('admin.treinos._form')
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    <button id="cancel" name="cancel" class="btn btn-default" onclick="history.back()">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
