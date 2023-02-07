<?php
require_once('../db/config.php');
include_once('../dao/UsuarioDao.php');
session_start();

$usuarioDao = new UsuarioDaoDB($pdo);


$email = filter_input(INPUT_POST, 'inputEmail');
$password = filter_input(INPUT_POST, 'inputPassword');

echo $email;
echo $password;

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
  
    header("Location: ../index.php");
} else {
  echo $email;
  echo $password;
  echo "Erro";
  header("Location: ../pages/login.php");
}