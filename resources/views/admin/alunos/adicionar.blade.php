{{-- @extends('layout.site') --}}

{{-- @section('titulo','Alunos') --}}

{{-- @section('conteudo') --}}
<div class="container">

    <h3 class="center">Adicionar aluno</h3>

    <div class="row">
        {{-- <form class="" action="{{route('admin.alunos.salvar')}}" method="post"> --}}
        <form class="" action="/admin/alunos/salvar" method="post">
            {{-- <input type="hidden" name="_token" value="{{csrf_field()}}"> --}}
            {{-- {{csrf_field()}} --}}
            @include('admin.alunos._form')
            <button class="btn deep-orange">Salvar</button>

        </form>
    </div>

</div>




{{-- @endsection --}}
