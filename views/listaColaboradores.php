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
    <h3 class="light">Colaboradores</h3>
    <form>
      <table>
        <thead>
          <tr>
            <th>Nome:</th>
            <th>Setor:</th>
            <th>Nota Geral</th>
            <th>Competencias</th>
            <th></th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <?php
            $sql = "SELECT c.id, c.nome, s.nome as setor FROM colaboradores as c LEFT JOIN setores as s ON c.id_setor = s.id";
              $resultado = mysqli_query($connect, $sql);
              while ($dados = mysqli_fetch_array($resultado)) :
          ?>
            <tr>
              <td><?= $dados['nome'] ?></td>
              <td><?= $dados['setor'] ?></td>
              <td>//</td>
              <td>
                <!--<a href="/views/notasCompetencias.php" class="btn"><i class="material-icons">chevron_right</i></a>-->

                <button data-target="modal1" class="btn modal-trigger" id="btn-1"><i class="material-icons">chevron_right</i></button>

                <div id="modal1" class="modal">
                  <div class="modal-content">
                    <h4>Competencias</h4>
                    <p>A bunch of text</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close btn">Sair</a>
                  </div>
              </td>
              <td><a href="editColaborador.php?id=<?= $dados['id'] ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
              <td><a href="" class="btn-floating red "><i class="material-icons">delete</i></a></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </form>

    <br>

    <a href="/views/addColaborador.php" class="btn">Add Colaborador</a>
  </div>
</div>

<?php
include_once '../html/footer.php';
?>

<!--<?php
    //setando nomes dos colaboradores
    $sqlc = "SELECT * FROM colaboradores";
    //setando nome dos setores
    $sqls = "SELECT s.nome FROM setores AS s INNER JOIN colaboradores AS c ON s.id_setor=c.id_colaborador";
    $resultado = mysqli_query($connect, $sqlc);
    $resultados = mysqli_query($connect, $sqls);
    while ($dados = mysqli_fetch_array($resultado)) :
      ?>

          <tr>

            <td><?php echo $dados['nome']; ?></td>

          <?php endwhile; ?>

          <?php while ($dadoss = mysqli_fetch_array($resultados)) : ?>
            
            <td><?php echo $dadoss['nome']; ?></td>

            <td>//</td>
            <td><a href="/views/notasCompetencias.php" class="btn"><i class="material-icons">chevron_right</i></a></td>
            <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
            <td><a href="" class="btn-floating red "><i class="material-icons">delete</i></a></td>
          </tr>

        <?php endwhile; ?>

          -->