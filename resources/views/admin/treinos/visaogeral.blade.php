
@extends('layouts.admin')

@section('main-content')


<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Informações</h5>
    </div>
    <div class="card-body">

        <table cellpadding="5">
            <tr>
                <th>Nome:</th>
                <td>{{ $registros->nome}}</td>
            </tr>
            <tr>
                <th>Objetivo:</th>
                <td>{{ $registros->objetivo}}</td>
            </tr>
            <tr>
                <th>Vo2:</th>
                <td>{{ $registros->vo2}}</td>
            </tr>
            <tr>
                <th>Lesões:</th>
                <td>{{ $registros->lesoes}}</td>
            </tr>
            <tr>
                <th>Observações:</th>
                <td>{{ $registros->observacoes}}</td>
            </tr>
        </table>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <a class="btn btn-primary" href="{{ route('admin.alunos.editar', $id_aluno) }}" role="button">Editar dados</a>
            <button id="cancel" name="cancel" class="btn btn-default" onclick="history.back()">Voltar</button>
        </div>
    </div>
</div>

@endsection




