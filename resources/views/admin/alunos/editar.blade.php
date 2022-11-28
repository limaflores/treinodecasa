@extends('layouts.admin')

@section('main-content')

<div class="container">
    <h3 class="center">Editar treino</h3>
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

@endsection

