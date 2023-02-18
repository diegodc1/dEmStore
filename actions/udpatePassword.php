<?php
require_once('../db/config.php');
include_once('../dao/UsuarioDao.php');
session_start();

$usuarioDao = new UsuarioDaoDB($pdo);

$userId = filter_input(INPUT_POST, 'id');
$password1 = filter_input(INPUT_POST, 'password1');
$confirmPass = filter_input(INPUT_POST, 'confirmPass');


if(!empty($userId)) {
  if($password1 === $confirmPass) {
    $user = new Usuario();
    $user->setPassword($password1);
    $user->setId($userId);

    $usuarioDao->updatePassword($user);

    $_SESSION['message-type'] = 'success';
    $_SESSION['icon-message'] = '#check-circle-fill';
    $_SESSION['insert_user_message'] = "Senha atualizada com sucesso!";
    header("Location: ../pages/perfil.php?id=<?= $userId ?>");
  } else {
    $_SESSION['message-type'] = 'danger';
    $_SESSION['icon-message'] = '#exclamation-triangle-fill';
    $_SESSION['insert_user_message'] = "As senhas devem ser iguais!";
    header("Location: ../pages/perfil.php?id=<?= $userId ?>");
  }

} else {
  $_SESSION['message-type'] = 'danger';
  $_SESSION['icon-message'] = '#exclamation-triangle-fill';
  $_SESSION['insert_user_message'] = "Erro ao realizar este processo! Tente novamente!";
  header("Location: ../pages/perfil.php?id=<?= $userId ?>");
}
