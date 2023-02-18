<?php
require_once('../db/config.php');
include_once('../dao/UsuarioDao.php');
session_start();

$usuarioDao = new UsuarioDaoDB($pdo);

$email = filter_input(INPUT_POST, 'inputEmail');
$password = filter_input(INPUT_POST, 'inputPassword');

if($usuarioDao->findUserLogin($email, $password) != false) {
  $user = $usuarioDao->findByEmail($email);

    $_SESSION['user_id'] = $user->getId();
    $_SESSION['user_email'] = $user->getEmail();
    $_SESSION['user_name'] = $user->getName();
    $_SESSION['user_phone'] = $user->getPhone();
    $_SESSION['user_address'] = $user->getAddress();
    $_SESSION['user_city'] = $user->getCity();
    $_SESSION['user_district'] = $user->getDistric();
    $_SESSION['user_cep'] = $user->getCep();
    $_SESSION['user_logado'] = true;
  
    $_SESSION['message-type'] = 'success';
    $_SESSION['icon-message'] = '#check-circle-fill';
    $_SESSION['insert_user_message'] = "Seja bem vindo, " . $user->getName() . "!";
    header("Location: ../index.php");
    exit();
} else {
  $_SESSION['message-type'] = 'danger';
  $_SESSION['icon-message'] = '#exclamation-triangle-fill';
  $_SESSION['insert_user_message'] = "Email ou senha incorretos!";
  $_SESSION['error_login'] = true;
  header("Location: ../pages/login.php");
}