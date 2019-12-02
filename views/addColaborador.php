<?php
include_once '../html/header.php';
require_once '../services/db_connect.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Colaboradores</h3>

    <form action="/controllers/createColaborador.php" method="POST">
      <div class="input-field col s12">
        <input type="text" name="nome_colaborador" id="nome_colaborador">
        <label for="nome_colaborador">Nome</label>
      </div>

      <div class="input-field col s12">
        <select name="setor" id="id_setor">
          <option value="" disabled selected></option>
          <?php
          $result_cat_post = "SELECT * FROM setores ORDER BY nome_setor";
          $result_cat_post = mysqli_query($connect, $result_cat_post);
          while ($row_cat_post = mysqli_fetch_assoc($result_cat_post)) {
            echo '<option value=" ' . $row_cat_post['id_setor'] . '">' . $row_cat_post['nome_setor'] . '</option>';
          }
          ?>

        </select>
        <label>Selecionar Setor</label>
      </div>

      <button type="submit" name="cadastrar-colaborador" class="btn"> Add </button>
      <a href="/views/listaColaboradores.php" class="btn green">Lista de Colaboradores</a>
    </form>

  </div>
</div>

<?php
include_once '../html/footer.php';
?>