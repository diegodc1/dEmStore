<?php
require_once('../db/config.php');
include_once('../dao/PostDao.php');
session_start();

$postDao = new postDaoDB($pdo);

$postId = filter_input(INPUT_GET, 'id');

$postDao->delete($postId);

$_SESSION['message-type'] = 'success';
$_SESSION['icon-message'] = '#check-circle-fill';
$_SESSION['insert_user_message'] = "Anúncio excluído com sucesso!";
header("Location: ../pages/perfil.php");