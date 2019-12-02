<?php
include_once '../html/header.php';
include_once '../services/db_connect.php';

?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Competências</h3>
    <form>
      <table>
        <thead>
          <tr>
            <th>Nome:</th>
            <th>Grupo:</th>
            <th></th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <?php
          $sql = "SELECT c.nome, g.nome as grupo FROM competencias as c LEFT JOIN competencia_grupoCompetencia as r ON r.id_competencia = c.id LEFT JOIN grupocompetencia as g ON g.id = r.id_grupoCompetencia";
          $resultado = mysqli_query($connect, $sql);
          while ($dados = mysqli_fetch_array($resultado)) :
            ?>
            <tr>
              <td><?php echo $dados['nome']; ?></td>
              <td><?php echo $dados['grupo']; ?></td>
              <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
              <td><a href="" class="btn-floating red "><i class="material-icons">delete</i></a></td>
            </tr>
        </tbody>
      <?php endwhile; ?>
      </table>
    </form>

    <br>

    <a href="/views/addCompetencia.php" class="btn">Adicionar Competência</a>
  </div>
</div>

<?php
include_once '../html/footer.php';
?>