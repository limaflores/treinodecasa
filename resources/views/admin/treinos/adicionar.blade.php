@extends('layouts.admin')

@section('main-content')

{{-- @section('conteudo') --}}

<div class="container">
    <h3 class="center">Adicionar treino</h3>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <form class="" action="{{route('admin.treinos.salvar')}}" method="post">
                    {{ csrf_field()}}
                    @include('admin.treinos._formAdd')
                    {{-- <button class="btn deep-orange">Salvar</button> --}}
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button id="cancel" name="cancel" class="btn btn-default" onclick="history.back()">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
