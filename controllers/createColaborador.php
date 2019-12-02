<?php
session_start();
require_once '../services/db_connect.php';

if (isset($_POST['cadastrar-colaborador'])) :
  $nome = mysqli_escape_string($connect, $_POST['nome_colaborador']);
  $setor = mysqli_escape_string($connect, $_POST['setor']);

  $sql = "INSERT INTO colaboradores (nome_colaborador, id_setor) VALUES ('$nome', '$setor')";

  if(mysqli_query($connect, $sql)):
    $_SESSION['mensagem'] = "Cadastrado como sucesso!";
    header('Location: /views/listaColaboradores.php');
  else:
    $_SESSION['mensagem'] = "Erro ao cadastrar";
    header('Location: /views/listaColaboradores.php');
  endif;
endif;