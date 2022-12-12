<div class="form-group">
    <label>Nome</label>
        <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
    <input type="text"  class="form-control" id="exampleInputEmail1" name="nome" value="{{isset($registrosAlunos->nome) ? $registrosAlunos->nome : ''}}" required="">
</div>
<!-- Não esquecer de colocar os mesmos name do BD -->
<div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email"  class="form-control" id="exampleInputEmail1" name="email" value="{{isset($registrosAlunos->email) ? $registrosAlunos->email : ''}}" >
</div>

<div class="form-group">
    <label>Telefone</label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="telefone" value="{{isset($registrosAlunos->telefone) ? $registrosAlunos->telefone : ''}}" >
</div>

<div class="form-group">
    <label>Objetivo</label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="objetivo" value="{{isset($registrosAlunos->objetivo) ? $registrosAlunos->objetivo : ''}}" required="">
</div>


<div class="form-group">
    <label>Data de nascimento</label>
    <input type="date"   class="form-control" id="exampleInputEmail1" name="datanascimento" value="{{isset($registrosAlunos->datanascimento) ? $registrosAlunos->datanascimento : ''}}">
</div>

<div class="form-group">
    <label>Nível de condicionamento</label>
    <input type="text"   class="form-control" id="exampleInputEmail1" name="nivelcondicionamento" value="{{isset($registrosAlunos->nivelcondicionamento) ? $registrosAlunos->nivelcondicionamento : ''}}">
</div>


<div class="form-group">
    <label>Vo2</label>
    <input type="number"   class="form-control" id="exampleInputEmail1" name="vo2" value="{{isset($registrosAlunos->vo2) ? $registrosAlunos->vo2 : ''}}">
</div>

<div class="form-group">
    {{-- <label>Professor</label> --}}
    <input type="hidden"   class="form-control" name="professor" value="{{$id}}">
</div>

<div class="form-group">
    <label>Lesões</label>
    <textarea type="textarea"   class="form-control" id="exampleInputEmail1" name="lesoes" value="{{isset($registrosAlunos->lesoes) ? $registrosAlunos->lesoes : ''}}">{{isset($registrosAlunos->lesoes) ? $registrosAlunos->lesoes : ''}}</textarea>
</div>

<div class="form-group">
    <label>Observações</label>
    <textarea type="textarea"   class="form-control" id="exampleInputEmail1" name="observacoes" style="width: 20em; height: 5em;" value="{{isset($registrosAlunos->observacoes) ? $registrosAlunos->observacoes : ''}}" >{{isset($registrosAlunos->observacoes) ? $registrosAlunos->observacoes : ''}}</textarea>
</div>


