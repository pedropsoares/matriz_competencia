<?php
include_once '../html/header.php';
require_once '../services/db_connect.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Competencias</h3>

    <form action="/controllers/createCompetencia.php" method="POST">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome">
        <label for="nome_competencia">Nome</label>
      </div>

      <div class="input-field col s12">
        <select name="id_grupo" id="id_grupoCompetencia">
          <option value="" disabled selected></option>
          <?php
            $result_cat_post = "SELECT * FROM grupocompetencia ORDER BY nome";
            $result_cat_post = mysqli_query($connect, $result_cat_post);
            while($row_cat_post = mysqli_fetch_assoc($result_cat_post)) {
              echo '<option value=" '.$row_cat_post['id'].'">'.$row_cat_post['nome'].'</option>';
            }
          ?>
            
        </select>
        <label>Selecionar Grupo</label>
      </div>

      <button type="submit" class="btn"> Salvar </button>
      <a href="/views/listaCompetencias.php" class="btn green">Lista de Competencias</a>
    </form>

  </div>
</div>

<?php
include_once '../html/footer.php';
?>