@extends('layouts.admin')
@section('main-content')

<div class="container">
    <h3 class="center">Adicionar aluno</h3>
    <div class="row">
        <form class="" action="{{route('admin.alunos.salvar')}}" method="post">
            {{ csrf_field()}}
            @include('admin.alunos._form')
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button id="cancel" name="cancel" class="btn btn-default" onclick="history.back()">Cancel</button>
        </form>
    </div>
</div>

@endsection
