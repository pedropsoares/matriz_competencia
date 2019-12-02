<?php
session_start();
require_once '../services/db_connect.php';

if (isset($_POST['nome'])) {
  $nome = mysqli_escape_string($connect, $_POST['nome']);
  $grupo = mysqli_escape_string($connect, $_POST['id_grupo']);
  $sqlComp = "INSERT INTO competencias (nome) VALUES ('$nome')";

  if (mysqli_query($connect, $sqlComp)) {
    $result = mysqli_query($connect, "SELECT LAST_INSERT_ID() as id");
    $result = mysqli_fetch_array($result);
    $sqlGrup = "INSERT INTO competencia_grupocompetencia (id_competencia, id_grupoCompetencia) VALUES ('".$result['id']."', '$grupo')";

    if (mysqli_query($connect, $sqlGrup)) {
      $_SESSION['mensagem'] = "Competencia cadastrada como sucesso!";
      header('Location: /views/listaCompetencias.php?sucesso');
    } else {
      $_SESSION['mensagem'] = "Erro ao cadastrar Competencia";
      header('Location: /views/listaCompetencias.php?erro1');
    }

  } else {
    $_SESSION['mensagem'] = "Erro ao cadastrar Competencia";
    header('Location: /views/listaCompetencias.php?erro2');
  }
}
