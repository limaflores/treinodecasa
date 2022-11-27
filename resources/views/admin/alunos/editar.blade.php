@extends('layouts.admin')

@section('main-content')

@section('main-content')

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            {{-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> --}}
                <tbody>
                    <div class="container">
                        <h1>Editar Aluno {{$registrosAlunos->nome}}</h1>
                        <div class="row">
                            <form class="" action="{{route('admin.alunos.atualizar',$registrosAlunos->id)}}" method="post">

                                {{ csrf_field()}}
                                <input type="hidden" name="_method" value="put">
                                @include('admin.alunos._form')
                                {{-- <button class="btn deep-orange">Atualizar</button> --}}
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button id="cancel" name="cancel" class="btn btn-default" onclick="history.back()">Cancel</button>

                            </form>
                        </div>
                    </div>
                </tbody>
            {{-- </table> --}}
        </div>
    </div>
</div>
@endsection
