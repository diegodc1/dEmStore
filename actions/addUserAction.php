<?php
require_once('../db/config.php');
include_once('../dao/UsuarioDao.php');
session_start();

$usuarioDao = new UsuarioDaoDB($pdo);

date_default_timezone_set('America/Sao_Paulo');
$cadDate = date("Y-m-d");
$cadTime = date('H:i:s');

$name = ucwords(strtolower(trim(filter_input(INPUT_POST, 'inputName'))));
$email = trim(filter_input(INPUT_POST, 'inputEmail'));
$phone = trim(filter_input(INPUT_POST, 'inputPhone'));
$street = trim(filter_input(INPUT_POST, 'inputStreet'));
$number = trim(filter_input(INPUT_POST, 'inputNumber'));
$city = trim(filter_input(INPUT_POST, 'inputCity'));
$district = trim(filter_input(INPUT_POST, 'inputDistrict'));
$cep = trim(filter_input(INPUT_POST, 'inputCep'));

$password = trim(filter_input(INPUT_POST, 'inputPassword'));
$confirmPassword = trim(filter_input(INPUT_POST, 'inputConfirmation'));
$status = "Ativo";

$address = $street . ", " . $number . " - " . $district . " - " . $city; 

if($usuarioDao->findByEmail($email) === false) {
  if($password === $confirmPassword) {
    $newUser = new Usuario();
    $newUser->setName($name);
    $newUser->setEmail($email);
    $newUser->setPassword($password);
    $newUser->setPhone($phone);
    $newUser->setAddress($address);
    $newUser->setCity($city);
    $newUser->setDistric($district);
    $newUser->setCep($cep);
    $newUser->setStatus($status);
    $newUser->setCadDate($cadDate);
    $newUser->setCadTime($cadTime);

    $usuarioDao->add($newUser);
    $_SESSION['message-type'] = 'success';
    $_SESSION['icon-message'] = '#check-circle-fill';
    $_SESSION['insert_user_message'] = "Cadastro realizado com sucesso! Faça seu login.";
    header("Location: ../pages/login.php");
    exit();
  } else {
    $_SESSION['message-type'] = 'danger';
    $_SESSION['icon-message'] = '#exclamation-triangle-fill';
    $_SESSION['insert_user_message'] = "As senhas devem ser iguais!";
    header("Location: ../pages/register.php");
  }
} else {
  $_SESSION['message-type'] = 'danger';
  $_SESSION['icon-message'] = '#exclamation-triangle-fill';
  $_SESSION['insert_user_message'] = "Usuário já cadastrado!";
  header("Location: ../pages/register.php");
}