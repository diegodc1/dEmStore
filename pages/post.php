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
  <?php include_once("../components/header.php")?>;
  <main>
    <div class="main-top">
      <div class="top-left">
        <h1>Titulo do Anúncio</h1>
        <p class="post-infos">Publicado em 10/02/23 às 09:30</p>
        <div class="img-box">
          <img src="https://assets3.repassa.com.br/fit-in/0x600/filters:sharpen(0.5,0.5,true)/spree/products/2338700/original/IMG_3565.JPG" alt="">
        </div>
      </div>
      <div class="top-right">
        <div class="price-box">
          <span>R$ 394</span>
        </div>

        <div class="box-right">
          
          <div class="desc-box">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, minima. Neque magni, pariatur ullam ex fuga temporibus dicta illum iure ab ipsam odio exercitationem. At minus dolor optio? Cum, delectus.</p></p>
          </div>

          <div class="main-down">
            <h2>Detalhes</h2>
            <div class="details-box">
              <div class="detail-box">
                <p class="detail-title">Nome Vendedor</p>
                <span class="detail-desc">Marcelly</span>
              </div>

              <div class="detail-box">
                <p class="detail-title">Telefone</p>
                <span class="detail-desc">4198438431</span>
              </div>

              <div class="detail-box">
                <p class="detail-title">Cidade</p>
                <span class="detail-desc">Curitiba</span>
              </div>
              
              <div class="detail-box">
                <p class="detail-title">Bairro</p>
                <span class="detail-desc">Campo Santana</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="line"></div>
    
  </main>

  <?php include_once("../components/footer.php")?>;

</body>
</html>