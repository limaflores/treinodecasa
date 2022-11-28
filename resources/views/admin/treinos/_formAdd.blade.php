
<!-- Form -->
<div class="input-field">
    <label>Objetivo do treino</label>
    <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
    <input type="text" class="form-control" name="objetivo" required="" value="{{isset($registro->objetivo) ? $registro->objetivo : ''}}">
</div>
<!-- Não esquecer de colocar os mesmos name do BD -->
<div class="input-field">
    <label>Descrição do treino</label>
    <input type="text" class="form-control" name="descricao" required="" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
</div>
<div class="input-field">
    <label>Número do treino</label>
    <input type="number" class="form-control" name="numerotreino" required="" value="{{isset($registro->numerotreino) ? $registro->numerotreino : ''}}">
</div>
<div class="input-field">
    <input type="hidden" class="form-control" name="aluno" value="{{$id}}">
</div>
<div class="input-field">
    <label>Nome do treino</label>
    <input type="text" class="form-control" name="nometreino" required="" value="{{isset($registro->nometreino) ? $registro->nometreino : ''}}">
</div>




