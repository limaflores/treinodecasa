
<!-- Form -->
<div class="input-field">
    <label>Objetivo do treino</label>
    <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
    <input type="text" class="form-control" name="objetivo" required="" value="{{isset($registro->objetivo) ? $registro->objetivo : ''}}">
</div>
<!-- Não esquecer de colocar os mesmos name do BD -->
<div class="input-field">
    <label>Descrição do treino</label>
    {{-- <input type="textarea" class="form-control" name="descricao" required="" value="{{isset($registro->descricao) ? $registro->descricao : ''}}"> --}}
    {{-- <textarea class="form-control" type="textarea" id="textarea1" class="materialize-textarea" name="descricao" style="width: 20em; height: 15em;" required="" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">{{isset($registro->descricao) ? $registro->descricao : ''}}</textarea> --}}
    <textarea class="form-control" name="descricao" rows="6" cols="35" value="{{isset($registro->descricao) ? $registro->descricao : ''}}"></textarea>
</div>
<div class="input-field">
    <label>Observacao</label>
    {{-- <input type="text" class="form-control" name="observacao" required="" value="{{isset($registro->observacao) ? $registro->observacao : ''}}"> --}}
    <textarea class="form-control" name="observacao" rows="2" cols="35" value="{{isset($registro->observacao) ? $registro->observacao : ''}}"></textarea>
</div>
<div class="input-field">
    <input type="hidden" class="form-control" name="aluno" value="{{$id}}">
</div>
<div class="input-field">
    <label>Nome do treino</label>
    <input type="text" class="form-control" name="nometreino" required="" value="{{isset($registro->nometreino) ? $registro->nometreino : ''}}">
</div>




