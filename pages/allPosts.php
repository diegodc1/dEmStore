<?php session_start();
include_once("../db/config.php");
include_once("../dao/PostDao.php");
require_once('../dao/UsuarioDao.php');

$postDao = new postDaoDB($pdo);
$usuarioDao = new usuarioDaoDB($pdo);

$category = filter_input(INPUT_GET, 'category');


if($category == "T") {
  $posts = $postDao->findAll();
} else {
  $posts = $postDao->findAllByCategory($category, $category);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/allPosts.css">
    <title>postagem</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>

<?php include_once('../components/header.php') ?>
    <h1 class="last-post-title">Anúncios</h1>
    <main>
        <div class="posts-group"> 

        <?php foreach($posts as $post):
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
                <p><?= $userPost->getName()?> - <?= $userPost->getDistric()?></p>
                <span><?= $datePost ?>, <?= $timePost ?></span>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
     
        <div>
    </main>
    <?php  include_once('../components/footer.php') ?>
    
  </body>
</html>