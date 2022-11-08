@extends('layout.site')

@section('titulo','Treinos')

@section('conteudo')
  <div class="container">
    <div class="container">
      <div class="section"> 
        <h3 class="center">Entrar</h3>
        <div class="section">     
          <div class="row">
            <form class="" action="{{route('site.login.entrar')}}" method="post" >
              {{ csrf_field() }}

              <div class="input-field">
                <input type="text" name="email">
                <label>E-mail</label>
              </div>
              <div class="input-field">
                <input type="password" name="senha">
                <label>Senha</label>
              </div>

              <button class="btn deep-orange">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
