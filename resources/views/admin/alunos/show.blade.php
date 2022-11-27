
@extends('layouts.admin')

@section('main-content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Treinos</th>
                        <th>Editar dados</th>
                    </tr>
                </thead>
                <tbody>
                    <h1>Aluno {{$registrosAlunos->nome}}</h1>

                    <tr>
                        <td>{{ $registrosAlunos->nome}}</td>
                        <td>{{ $registrosAlunos->email}}</td>
                        <td>
                            <a href="{{ route('admin.alunos.editar', $registrosAlunos->id) }}">Treinos</a>
                        </td>
                        <td>
                            <a href="{{ route('admin.alunos.editar', $registrosAlunos->id) }}">Editar Dados</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
