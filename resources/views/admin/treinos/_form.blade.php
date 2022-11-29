<!-- Form -->
<div class="input-field">
    <label>Objetivo</label>
    <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
    <input class="form-control" type="text" name="objetivo" required="" value="{{isset($registro->objetivo) ? $registro->objetivo : ''}}">
</div>
<div class="input-field">
    <label>Observacao</label>
    <input class="form-control" type="textarea" name="observacao" required="" value="{{isset($registro->observacao) ? $registro->observacao : ''}}">
</div>

<div class="input-field">
    <input class="form-control" type="hidden" name="aluno" required="" value="{{isset($registro->aluno) ? $registro->aluno : ''}}">
</div>
<div class="input-field">
    <label>Nome do treino</label>
    <input class="form-control" type="text" name="nometreino" value="{{isset($registro->nometreino) ? $registro->nometreino : ''}}">
</div>
<!-- Não esquecer de colocar os mesmos name do BD -->
<div class="input-field">
    <label>Descrição do treino</label>
    <!-- <input type="text" name="descricao" required="" value="{{isset($registro->descricao) ? $registro->descricao : ''}}"> -->
    <!--<textarea type="text" name="descricao" style="width: 20em; height: 15em;" required="" value="{{isset($registro->descricao) ? $registro->descricao : ''}}"></textarea>-->
    <textarea class="form-control" type="textarea" id="textarea1" class="materialize-textarea" name="descricao" style="width: 20em; height: 15em;" required="" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">{{isset($registro->descricao) ? $registro->descricao : ''}}</textarea>
    <!--<label for="textarea1">Textarea</label>-->
</div>




