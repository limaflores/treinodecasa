@extends('layouts.admin')
{{-- @section('titulo','Aluno') --}}

@section('main-content')

<div class="container">

    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
    <div class="alert alert-success border-left-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <h3 class="center">Lista de treinos</h3>
    @foreach($registrosAlunos as $registroAluno)
      <h5>Aluno {{ $registroAluno->nome }}</h5>
        <div class="my-2">
            <a href="{{route('admin.treinos.visaogeral', $registroAluno->id)}}" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-info-circle"></i>
                </span>
                <span class="text">Visão geral</span>
            </a>
        </div>
    @endforeach

    <div class="row">
        <!-- Content Column -->
        <!-- <div class="col-lg-12 mb-4"> -->
            <!-- Project Card Example -->
            <div class="card shadow mb-3">
                <div class="card-body">
                    {{-- <div class="card shadow mb-4"> --}}
                        <!-- <div class="card-body"> -->
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                    <?php $contador = $numeroregistros+1; ?>
                                    <thead>
                                        <tr>
                                            <th>Ordem</th>
                                            {{-- <th>Número do treino</th> --}}
                                            <th>Nome do treino</th>
                                            <th>Visualizar / Editar</th>
                                            <th>Deletar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($registros as $registro)
                                            <?php $contador = $contador-1; ?>
                                            <tr>
                                                <td>{{ $contador }}</td>
                                                {{-- <td>{{ $registro->numerotreino }}</td> --}}
                                                <td>{{ $registro->nometreino }}</td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ route('admin.treinos.editar',$registro->id)  }}" role="button">Visualizar</a>
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
                                                                                <a class="btn btn-primary" href="{{ route('treinos.deletar', $registro->id) }}">Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        <!-- </div> -->
                    {{-- </div> --}}
                    <!-- Add treino -->
                    <div class="row">
                        <div class="col-lg-1">
                            <a href="{{ route('admin.treinos.adicionar', $id) }}" class="btn btn-info btn-icon-split float-left">
                                <span class="icon text-white-50">
                                    <span class="text">Adicionar treino</span>
                                    <i class="fas fa-plus"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- End of Add treino -->
                <!-- </div> -->
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                order: [[3, 'desc']],
            });
        });
    </script>

@endsection
