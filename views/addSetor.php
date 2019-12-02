<?php
include_once '../html/header.php';
require_once '../services/db_connect.php';

?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Setores</h3>

    <form action="/controllers/createSetor.php" method="POST">
      <div class="input-field col s12">
        <input type="text" name="nome_setor" id="nome_setor">
        <label for="nome_setor">Nome</label>
      </div>

      <div class="input-field col s12">
        <select name="id_grupo" id="id_grupoCompetencia">
          <option value="" disabled selected></option>
          <?php
          $result_cat_post = "SELECT * FROM grupocompetencia ORDER BY nome_grupo";
          $result_cat_post = mysqli_query($connect, $result_cat_post);
          while ($row_cat_post = mysqli_fetch_assoc($result_cat_post)) {
            echo '<option value=" ' . $row_cat_post['id_grupoCompetencia'] . '">' . $row_cat_post['nome_grupo'] . '</option>';
          }
          ?>

        </select>
        <label>Selecionar Grupo de Competencia</label>
      </div>

      <button type="submit" name="cadastrar-setor" class="btn"> Add </button>
      <a href="/views/listaSetores.php" class="btn green">Lista de Setores</a>

    </form>

  </div>
</div>

<?php
include_once '../html/footer.php';
?>