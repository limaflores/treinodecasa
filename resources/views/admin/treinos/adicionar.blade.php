@extends('layouts.admin')

@section('main-content')

{{-- @section('conteudo') --}}

<div class="container">
    <h3 class="center">Adicionar treino para {{$nomealuno}}</h3>
    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="my-2">
                <a href="{{route('admin.treinos.visaogeral', $id)}}" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-info-circle"></i>
                    </span>
                    <span class="text">Visão geral</span>
                </a>
            </div>

            <div class="row">
                <form class="" action="{{route('admin.treinos.salvar')}}" method="post">
                    {{ csrf_field()}}
                    @include('admin.treinos._formAdd')
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button id="cancel" name="cancel" class="btn btn-default" onclick="history.back()">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
