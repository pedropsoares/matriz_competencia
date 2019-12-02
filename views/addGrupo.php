<?php
include_once '../html/header.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Grupos</h3>

    <form action="/controllers/createGrupo.php" method="POST">
      <div class="input-field col s12">
        <input type="text" name="nome_grupo" id="nome_grupo">
        <label for="nome_grupo">Nome</label>
      </div>

      <button type="submit" name="cadastrar-grupo" class="btn"> Add </button>
      <a href="/views/listaGrupos.php" class="btn green">Lista de Grupos</a>
    </form>

  </div>
</div>

<?php
include_once '../html/footer.php';
?>