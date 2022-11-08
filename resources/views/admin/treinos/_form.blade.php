<div class="input-field">
    <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
    <input type="text" name="objetivo" value="{{isset($registro->objetivo) ? $registro->objetivo : ''}}">
    <label>Objetivo</label>
</div>


<!-- Não esquecer de colocar os mesmos name do BD -->
<div class="input-field">
    <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
    <label>Descricao</label>
</div>

<div class="input-field">
    <input type="number" name="numerotreino" value="{{isset($registro->numerotreino) ? $registro->numerotreino : ''}}">
    <label>Numero treino</label>
</div>

<div class="input-field">
    <input type="text" name="aluno" value="{{isset($registro->aluno) ? $registro->aluno : ''}}">
    <label>Aluno</label>
</div>

<div class="input-field">
    <input type="text" name="nometreino" value="{{isset($registro->nometreino) ? $registro->nometreino : ''}}">
    <label>Nome do treino</label>
</div>




