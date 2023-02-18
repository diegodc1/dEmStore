<?php 
session_start();

if(!isset($_SESSION['user_logado'])) {
  $_SESSION['message-type'] = 'danger';
  $_SESSION['icon-message'] = '#exclamation-triangle-fill';
  $_SESSION['insert_user_message'] = "Você não tem permissão para acessar está página!";
  header("Location: ../pages/index.php");
}
