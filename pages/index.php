<?php session_start();

require_once('../db/config.php');
require_once('../dao/PostDao.php');
require_once('../dao/UsuarioDao.php');

$postDao = new postDaoDB($pdo);
$usuarioDao = new usuarioDaoDB($pdo);


$lastPosts = $postDao->findLastFourPost();
$allPosts = $postDao->findAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Início</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../styles/index.css">
</head>
<body>
  
<?php
  include_once('../components/header.php');

?>
    <main>
      <?php require('../components/alertMessage.php')?>
      <div class="category-group">
        <div class="category-item">
          <a href="../pages/allPosts.php?category=M"> <i class="fa-solid fa-person"></i></a>
          <span>Masculino</span>
        </div>
        <div class="category-item">
          <a href="../pages/allPosts.php?category=F"><i class="fa-solid fa-person-dress"></i></a>
          <span>Feminino</span>
        </div>
        <div class="category-item">
          <a href="../pages/allPosts.php?category=I"><i class="fa-solid fa-children"></i></a>
          <span>Infantil</span>
        </div>   
        <div class="category-item">
          <a href="../pages/allPosts.php?category=U"><i class="fa-solid fa-people-arrows"></i></a>
          <span>Unissex</span>
        </div>   
        
        <div class="category-item">
          <a href="../pages/allPosts.php?category=T"><i class="fa-solid fa-clock"></i></a>
          <span>Recentes</span>
        </div> 
      </div>
      
      <h1 class="last-post-title">Destaques</h1>
      <div class="last-posts-group">

        <?php foreach($lastPosts as $post): ?>
          <a class="card" style="width: 18rem;" href="../pages/post.php?id=<?= $post->getId()?>">
            <img src="../images/<?= $post->getImgPath()?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $post->getTitle() ?></h5>
              <p class="card-text"><?= $post->getContent() ?></p>
              <p class="card-price">R$<?= number_format($post->getPrice(),2, ",", ".") ?></p>
            </div>
          </a>
        <?php endforeach?>

      </div>


      <h1 class="last-post-title">Mais Anúncios</h1>

      <div class="posts-group"> 

      
        <?php foreach($allPosts as $post): 
          $userPost = $usuarioDao->findById($post->getUserId());
          $datePost = date('d/m/Y', strtotime($post->getDate()));
          $timePost = date('H:i', strtotime($post->getTime()));
          ?>
          <a class="post-item" href="../pages/post.php?id=<?= $post->getId()?>">
            <div class="post-img-box">
              <img src="../images/<?= $post->getImgPath()?>" alt="" class="img-post">
            </div>
            <div class="post-text-box">
              <div class="post-text-top">
                <h2>
                  <?= $post->getTitle() ?>
                </h2>
                <p class="post-price">R$<?= number_format($post->getPrice(),2, ",", ".") ?></p>
              </div>
              <div class="post-text-bottom">
                <p><?= $userPost->getCity()?> - <?= $userPost->getDistric()?></p>
                <span><?= $datePost ?> - <?= $timePost?></span>
              </div>
            </div>
          </a>  
        <?php endforeach; ?>
      </div>
    </main>

  
  <?php 
  include_once('../components/footer.php');
  ?>
  <script src="../js/carrousel.js"></script>
</body>
</html>




