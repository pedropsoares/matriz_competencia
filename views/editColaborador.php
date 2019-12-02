<?php
include_once '../html/header.php';
require_once '../services/db_connect.php';

$dados = null;

$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $sql = "UPDATE colaboradores SET nome='" . $_POST['nome'] . "', id_setor='" . $_POST['setor'] . "' WHERE id = '" . $_POST['id'] . "'";
  $result = mysqli_query($connect, $sql);

  if (!$result) {
    echo 'Error';
    $error = true;
  } else {
    $sql = "SELECT id, nome, id_setor FROM colaboradores WHERE id = '" . $_POST['id'] . "'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
  }
} else if (isset($_GET['id'])) {
  $sql = "SELECT id, nome, id_setor FROM colaboradores WHERE id = '" . $_GET['id'] . "'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
}
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Colaboradores</h3>

    <form method="POST">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'] ?>">
        <label for="nome">Nome</label>
      </div>

      <div class="input-field col s12">
        <select name="setor" id="id_setor">
          <option value="" disabled selected></option>
          <?php
          $sql = "SELECT * FROM setores ORDER BY nome";
          $setores = mysqli_query($connect, $sql);
          while ($setor = mysqli_fetch_assoc($setores)) {
            $selected = $dados['id_setor'] == $setor['id'] ? true : false;

            if ($selected) :
              echo '<option value=" ' . $setor['id'] . '" selected>' . $setor['nome'] . '</option>';
            else :
              echo '<option value=" ' . $setor['id'] . '">' . $setor['nome'] . '</option>';
            endif;
          }
          ?>

        </select>
        <label>Selecionar Setor</label>
      </div>

      <input type="hidden" id="id" name="id" value="<?= $dados['id'] ?>" />

      <button type="submit" name="cadastrar-colaborador" class="btn"> Salvar </button>
      <a href="/views/listaColaboradores.php" class="btn green">Lista de Colaboradores</a>
    </form>

  </div>
</div>

<?php
include_once '../html/footer.php';
?>