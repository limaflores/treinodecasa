@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1> --}}

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
    <div class="row">
        <!-- Content Column -->
        <div class="col-lg-6 mb-4">
            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                {{-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div> --}}
                <div class="card-body">
                    <div class="col-lg-11">
                        <h1 class="h3 mb-4 text-gray-800">Lista de alunos</h1>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Acessar aluno</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($registrosAlunos as $aluno)
                                            <tr>
                                                <td>{{ $aluno->nome}}</td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ route('alunos.visualizar', $aluno->id) }}" role="button">Acessar</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Add aluno -->
            <div class="row">
                <div class="col-lg-1">
                    <a href="{{ route('alunos.adicionar') }}" class="btn btn-info btn-icon-split float-left">
                        <span class="icon text-white-50">
                            <span class="text">Adicionar aluno</span>
                            <i class="fas fa-plus"></i>
                        </span>
                    </a>
                </div>
            </div>
            <!-- End of Add aluno -->
        </div>
    </div>
@endsection
