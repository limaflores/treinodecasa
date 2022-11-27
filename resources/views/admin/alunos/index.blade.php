@extends('layouts.admin')

@section('main-content')

@if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger border-left-danger" role="alert">
        <ul class="pl-4 my-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    {{-- <div class="col-lg-1">
        <a href="{{ route('users.create') }}" class="btn btn-info btn-icon-split float-left">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span> --}}
            <span class="text">Novo</span>
        {{-- </a> --}}
    </div>
    <div class="col-lg-11">
        <h1 class="h3 mb-4 text-gray-800">Lista de alunos</h1>
    </div>
</div>
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registrosAlunos as $aluno)
                        <tr>
                            <td>{{ $aluno->nome}}</td>
                            <td>{{ $aluno->email}}</td>
                            <td>
                                <a href="{{ route('alunos.visualizar', $aluno->id) }}">Detalhes</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection




{{--
  <div class="container">
    <h3 class="center">Lista de alunos</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <!-- <th>Id</th> -->
            <th>Nome</th>
            <!-- <th>E-mail</th> -->
            <!-- <th>Telefone</th> -->
            <!-- <th>Objetivo</th> -->
            <!-- <th>Vo2</th> -->
            <!-- <th>Usuário</th> -->
            <!-- <th>Observações</th> -->
          </tr>
        </thead>
        <tbody>
          @foreach($registrosAlunos as $registroAluno)
            <tr>
              <!-- <td>{{ $registroAluno->id }}</td> -->
              <td>{{ $registroAluno->nome }}</td>
              <!-- <td>{{ $registroAluno->email }}</td> -->
              <!-- <td>{{ $registroAluno->telefone }}</td> -->
              <!-- <td>{{ $registroAluno->objetivo }}</td> -->
              <!-- <td>{{ $registroAluno->vo2 }}</td> -->
              <!-- <td>{{ $registroAluno->usuario }}</td> -->
              <!-- <td>{{ $registroAluno->observacoes }}</td> -->
              <td>
                <a class="btn green" style="padding:0 1.8rem;" href="{{ route('admin.alunos.visualizar',$registroAluno->id) }}">Ver</a>
                <a class="btn deep-orange" style="padding:0 1rem;" href="{{ route('admin.alunos.editar',$registroAluno->id) }}">Editar</a>
                <!-- <a class="btn red" href="{{ route('admin.alunos.deletar',$registroAluno->id) }}">Deletar</a> -->
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.alunos.adicionar') }}">Adicionar</a>

    </div>

  </div>




@endsection --}}
