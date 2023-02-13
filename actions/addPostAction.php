<?php
require_once('../db/config.php');
include_once('../dao/PostDao.php');
session_start();

$postDao = new PostDaoDB($pdo);

date_default_timezone_set('America/Sao_Paulo');
$cadDate = date("Y-m-d");
$cadTime = date('H:i:s');

$title = filter_input(INPUT_POST, 'inputTitle');
$content = filter_input(INPUT_POST, 'inputContent');
$category = filter_input(INPUT_POST, 'inputCategory');
$price = filter_input(INPUT_POST, 'inputPrice');

$userId = $_SESSION['user_id'];

echo $_FILES['inputImg'];


if(isset($_FILES['inputImg'])) {
  $ext = strtolower(substr($_FILES['inputImg']['name'],-4)); 
  $size = $_FILES['inputImg']['size'];

  //verificação formtato
  if($ext == '.jpg' || $ext == '.png' || $ext == 'jpeg') {

    //verificação tamanho
    if($size < 1048576) {
      $new_name = date("Y.m.d-H.i.s") . $ext; 
      $dir = '../images/'; 
      move_uploaded_file($_FILES['inputImg']['tmp_name'], $dir.$new_name); 
      $image = $new_name;


      $newPost = new Post();
      $newPost->setTitle($title);
      $newPost->setContent($content);
      $newPost->setCategory($category);
      $newPost->setUserId($userId);
      $newPost->setDate($cadDate);
      $newPost->setTime($cadTime);
      $newPost->setViews(0);
      $newPost->setStatus('Ativo');
      $newPost->setPrice($price);
      $newPost->setImgPath($image);

      $postDao->add($newPost);

      header("Location: ../index.php");
      exit();


    } else {
      $erro_img = "O arquivo não deve ser maior que 1MB!";
      $erro = true;
    }
  } else {
    $erro_img = "O formato da imagem enviada não é aceita!";
    $erro = true;
  }
}

// $image = filter_input(INPUT_POST, 'inputTitle');

