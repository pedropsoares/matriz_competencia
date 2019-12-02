<?php
session_start();
require_once '../services/db_connect.php';

if (isset($_POST['cadastrar-setor'])) :
  $nome = mysqli_escape_string($connect, $_POST['nome_setor']);
  $grupo = mysqli_escape_string($connect, $_POST['id_grupo']);

  $sql = "INSERT INTO setores (nome_setor, id_grupoCompetencia) VALUES ('$nome', '$grupo')";

  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Setor cadastrado como sucesso!";
    header('Location: /views/listaSetores.php');
  else:
    $_SESSION['mensagem'] = "Erro ao cadastrar o Setor";
    header('Location: /views/listaSetores.php');
  endif;
endif;