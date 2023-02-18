<?php 
session_start();
require_once('../db/config.php');
require_once('../dao/PostDao.php');
require_once('../dao/UsuarioDao.php');

$postDao = new postDaoDB($pdo);
$usuarioDao = new usuarioDaoDB($pdo);
$postId = filter_input(INPUT_GET, 'id');


$post = $postDao->findById($postId);

$datePost = date('d/m/Y', strtotime($post->getDate()));
$timePost = date('H:i', strtotime($post->getTime()));

$user = $usuarioDao->findById($post->getUserId());

if(isset($_SESSION['user_id'])){
  if($post->getUserId() != $_SESSION['user_id']) {
    $postDao->updateViews($post->getId());
  }
} else {
  $postDao->updateViews($post->getId());
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/styles/post.css">
</head>
<body>
  <?php include_once("../components/header.php")?>
  <main>
    <div class="main-top">
      <div class="top-left">
        <h1><?= $post->getTitle()?></h1>
        <p class="post-infos">Publicado em <?= $datePost?> às <?= $timePost?></p>
        <div class="img-box">
          <img src="../images/<?= $post->getImgPath()?>" alt="">
        </div>
      </div>
      <div class="top-right">
        <div class="price-box">
          <span>R$ <?= number_format($post->getPrice(),2, ",", ".") ?></span>
        </div>

        <div class="box-right">
          
          <div class="desc-box">
            <p><?= $post->getContent()?></p></p>
          </div>

          <div class="main-down">
            <h2>Detalhes</h2>
            <div class="line-div"></div>

            <div class="details-box">
              <div class="detail-box">
                <p class="detail-title">Nome Vendedor</p>
                <span class="detail-desc"><?= $user->getName() ?></span>
              </div>

              <div class="detail-box">
                <p class="detail-title">Telefone</p>
                <span class="detail-desc"><?= $user->getPhone() ?></span>
              </div>

              <div class="detail-box">
                <p class="detail-title">Cidade</p>
                <span class="detail-desc"><?= $user->getCity() ?></span>
              </div>
              
              <div class="detail-box">
                <p class="detail-title">Bairro</p>
                <span class="detail-desc"><?= $user->getDistric() ?></span>
              </div>
            </div>
            <div class="line-div"></div>
          </div>
        </div>
      </div>
    </div>
    
  </main>
  <?php include_once("../components/footer.php")?>


</body>
</html>