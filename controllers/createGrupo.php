<?php
session_start();
require_once '../services/db_connect.php';

if (isset($_POST['cadastrar-grupo'])) :
  $nome = mysqli_escape_string($connect, $_POST['nome_grupo']);

  $sql = "INSERT INTO grupocompetencia (nome_grupo) VALUES ('$nome')";

  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Grupo cadastrado como sucesso!";
    header('Location: /views/listaGrupos.php');
  else:
    $_SESSION['mensagem'] = "Erro ao cadastrar Grupo";
    header('Location: /views/listaGrupos.php?erro');
  endif;
endif;