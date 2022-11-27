<div class="form-group">
    <label>Nome</label>
        <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
    <input type="text"  class="form-control" id="exampleInputEmail1" name="nome" value="{{isset($registrosAlunos->nome) ? $registrosAlunos->nome : ''}}" required="">
</div>




{{-- <div class="form-group">
    <input type="email" class="form-control form-control-user"
    id="exampleInputEmail" aria-describedby="emailHelp"
    placeholder="Enter Email Address...">
</div>
--}}

{{-- <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div> --}}
<!-- Não esquecer de colocar os mesmos name do BD -->
<div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email"  class="form-control" id="exampleInputEmail1" name="email" value="{{isset($registrosAlunos->email) ? $registrosAlunos->email : ''}}" required="">
</div>

<div class="form-group">
    <label>Telefone</label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="telefone" value="{{isset($registrosAlunos->telefone) ? $registrosAlunos->telefone : ''}}" required="">
</div>

<div class="form-group">
    <label>Objetivo</label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="objetivo" value="{{isset($registrosAlunos->objetivo) ? $registrosAlunos->objetivo : ''}}" required="">
</div>

<div class="form-group">
    <label>Vo2</label>
    <input type="number"   class="form-control" id="exampleInputEmail1" name="vo2" value="{{isset($registrosAlunos->vo2) ? $registrosAlunos->vo2 : ''}}" required="">
</div>

<div class="form-group">
    <label>Usuário</label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="usuario" value="{{isset($registrosAlunos->usuario) ? $registrosAlunos->usuario : ''}}" required="">
</div>

<div class="form-group">
    <label>Senha</label>
    <input type="password"   class="form-control" id="exampleInputEmail1" name="senha" value="{{isset($registrosAlunos->senha) ? $registrosAlunos->senha : ''}}" required="">
</div>

<div class="form-group">
    <label>Observações</label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="observacoes" value="{{isset($registrosAlunos->observacoes) ? $registrosAlunos->observacoes : ''}}" required="">
</div>


