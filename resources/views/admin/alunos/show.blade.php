
@extends('layouts.admin')

@section('main-content')


<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Treinos</th>
                        <th>Editar dados</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <h1>Aluno {{$registrosAlunos->nome}}</h1>
                    <tr>
                        <td>{{ $registrosAlunos->nome}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('treinos.visualizarlista', $registrosAlunos->id) }}" role="button">Treinos</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.alunos.editar', $registrosAlunos->id) }}" role="button">Editar</a>
                        </td>
                        <td>
                            <div class="container d-flex justify-content-center">
                                <button class="btn btn-danger  " data-toggle="modal" data-target="#my-modal">Deletar</button>

                                <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content border-0">
                                            <div class="modal-body p-0">
                                                <div class="card border-0 p-sm-3 p-2 justify-content-center">
                                                    <div class="card-header pb-0 bg-white border-0 "><div class="row"><div class="col ml-auto"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div> </div>
                                                    <p class="font-weight-bold mb-2"> Você confirma a exclusão ?</p><p class="text-muted ">  </p></div>
                                                    <div class="card-body px-sm-4 mb-2 pt-1 pb-0">
                                                        <div class="row justify-content-end no-gutters"><div class="col-auto"><button type="button" class="btn btn-light text-muted" data-dismiss="modal">Cancel</button></div>
                                                        <div class="col-auto">
                                                        <a class="btn btn-primary" href="{{ route('alunos.deletar', $registrosAlunos->id) }}">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Informações</h5>
    </div>
    <div class="card-body">

        <table cellpadding="5">
            <tr>
                <th>Nome:</th>
                <td>{{ $registrosAlunos->nome}}</td>
            </tr>
            <tr>
                <th>E-mail:</th>
                <td>{{ $registrosAlunos->email}}</td>
            </tr>
            <tr>
                <th>Telefone:</th>
                <td>{{ $registrosAlunos->telefone}}</td>
            </tr>
            <tr>
                <th>Objetivo:</th>
                <td>{{ $registrosAlunos->objetivo}}</td>
            </tr>
            <tr>
                <th>Vo2:</th>
                <td>{{ $registrosAlunos->vo2}}</td>
            </tr>
            <tr>
                <th>Lesões:</th>
                <td>{{ $registrosAlunos->lesoes}}</td>
            </tr>
            <tr>
                <th>Observações:</th>
                <td>{{ $registrosAlunos->observacoes}}</td>
            </tr>
        </table>

    </div>
</div>

@endsection




