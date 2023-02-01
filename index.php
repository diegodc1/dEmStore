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
  <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
  
<?php
  include_once('./components/hearder.php');

?>
    <main>
      <div class="category-group">
        <div class="category-item">
          <a href=""> <i class="fa-solid fa-user-tie"></i></a>
          <span>Masculino</span>
        </div>
        <div class="category-item">
          <a href=""><i class="fa-solid fa-person-dress"></i></a>
          <span>Feminino</span>
        </div>
        <div class="category-item">
          <a href=""><i class="fa-solid fa-children"></i></a>
          <span>Infantil</span>
        </div>      
      </div>

      <div id="carouselExampleSlidesOnly" class="carousel slide post-group" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://a-static.mlcdn.com.br/800x560/conjunto-feminino-blusa-short-roupas-femininas-bellucy-modas/bellucymodas/15847709628/e5f663fe3ac69e454e20cd57d496513c.jpeg" class="d-block " alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeMI8nKHInMhJwnHJ38bZDmqvFJtHqXunM0Q&usqp=CAU" class="d-block " alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.vnda.com.br/600x/benevento/2022/06/22/16_6_4_414_Collin.png?v=1655925648" class="d-block " alt="...">
          </div>
        </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>


      <div class="posts-group"> 
        <div class="post-item">
          <div class="post-img-box">
            <img src="https://conteudo.imguol.com.br/c/noticias/c6/2020/05/14/denuncia-online-redes-sociais-megafone-trombone-celular-smartphone-discussao-debate-bate-boca-barraco-redes-sociais-live-streaming-propaganda-anuncio-1589494596431_v2_1x1.jpg" alt="" class="img-post">
          </div>
          <div class="post-text-box">
            <div class="post-text-top">
              <h2>
                Título Anúncio
              </h2>
            </div>
            <div class="post-text-bottom">
              <p>Curitiba - PR</p>
              <span>Hoje, 18:20</span>
            </div>
          </div>
        </div>
      </div>
    </main>

  
  <?php 
  include_once('./components/footer.php');
  ?>
</body>
</html>