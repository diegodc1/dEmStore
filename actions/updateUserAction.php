<?php
require_once('../db/config.php');
include_once('../dao/UsuarioDao.php');
session_start();

$usuarioDao = new UsuarioDaoDB($pdo);

$userId = filter_input(INPUT_POST, 'id');
$name = ucwords(strtolower(trim(filter_input(INPUT_POST, 'inputName'))));
$email = trim(filter_input(INPUT_POST, 'inputEmail'));
$phone = trim(filter_input(INPUT_POST, 'inputPhone'));
$city = trim(filter_input(INPUT_POST, 'inputCity'));
$district = trim(filter_input(INPUT_POST, 'inputDistrict'));


if(!empty($userId)) {
  $user = new Usuario();
  $user->setName($name);
  $user->setEmail($email);
  $user->setPhone($phone);
  $user->setCity($city);
  $user->setDistric($district);
  $user->setId($userId);

  $usuarioDao->update($user);

  $_SESSION['message-type'] = 'success';
  $_SESSION['icon-message'] = '#check-circle-fill';
  $_SESSION['insert_user_message'] = "Usuário atualizado com sucesso!";
  header("Location: ../pages/perfil.php?id=<?= $userId ?>");
} else {
  $_SESSION['message-type'] = 'danger';
  $_SESSION['icon-message'] = '#exclamation-triangle-fill';
  $_SESSION['insert_user_message'] = "Erro ao realizar este processo! Tente novamente!";
  header("Location: ../pages/perfil.php?id=<?= $userId ?>");
}
