<?php
session_start();
if (isset($_SESSION['mensagem'])) : ?>

  <script>
    window.onload = function() {
      M.toast({
        html: '<?php echo $_SESSION['mensagem']; ?>'
      });
    };
  </script>

<?php
endif;
session_unset();

include_once '../html/header.php';
include_once '../services/db_connect.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Setores</h3>
    <a href="/views/addSetor.php" class="btn">Adicionar Setor</a>
    <form>
      <table>
        <thead>
          <tr>
            <th>Nome:</th>
            <th>Grupo de Competencias :</th>
            <th></th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <?php
          $sql = "SELECT s.nome, g.nome as grupo 
          FROM setores as s 
          INNER JOIN grupocompetencia as g 
          ON s.id_grupoCompetencia = g.id";
          $resultado = mysqli_query($connect, $sql);
          while ($dados = mysqli_fetch_array($resultado)) :
            ?>
            <tr>
              <td><?php echo $dados['nome']; ?></td>
              <td><?php echo $dados['grupo']; ?></td>
              <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
              <td><a href="" class="btn-floating red "><i class="material-icons">delete</i></a></td>
            </tr>
          <?php endwhile ?>
        </tbody>
      </table>
    </form>
  </div>
</div>

<?php
include_once '../html/footer.php';
?>