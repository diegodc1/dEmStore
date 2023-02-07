<?php 
require_once('../db/config.php');
include_once('../dao/UsuarioDao.php');
session_start();

$usuarioDao = new UsuarioDaoDB($pdo);

$user = $usuarioDao->findById($_SESSION['user_id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>

  <link rel="stylesheet" href="../styles/perfil.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <?php include_once("../components/header.php");
  ?>

  <main>
    <div class="info-user-box">
      <h1>Meu cadastro</h1>
      <form action="">
        <div class="row row-box">

          <div class="row-left">
            <h3>Dados Pessoais:</h3>
            <div class="col-10 input-box">
              <label for="inputName" class="form-label">Nome:</label>
              <input name="inputName" type="text" class="form-control" id="emailInput" placeholder="" value="<?= $user->getName()?>">
            </div>

            <div class="col-10 input-box">
              <label for="inputPhone" class="form-label">Telefone:</label>
              <input name="inputPhone" type="text" class="form-control" id="inputPhone" placeholder=""  value="<?= $user->getPhone()?>">
            </div> 

            <div class="col-10 input-box">
              <label for="inputEmail" class="form-label">Email:</label>
              <input name="inputEmail" type="text" class="form-control" id="inputEmail" placeholder=""  value="<?= $user->getEmail()?>">
            </div>
          </div>

          <div class="row-midle">
            <h3>Endereço:</h3>


            <div class="col-10 input-box">
              <label for="inputDistrict" class="form-label">Bairro:</label>
              <input name="inputDistrict" type="text" class="form-control" id="inputStreet" placeholder=""  value="<?= $user->getDistric()?>">
            </div>

            <div class="col-10 input-box">
              <label for="inputCity" class="form-label">Cidade:</label>
              <input name="inputCity" type="text" class="form-control" id="inputStreet" placeholder=""  value="<?= $user->getCity()?>">
            </div>
          </div>

          <div class="row-right">
            <h3>Senha</h3>
            <div class="col-9 input-box">
              <label for="inputPassword" class="form-label">Senha:</label>
              <input name="inputPassword" type="text" class="form-control" id="inputStreet" placeholder="">
            </div>

            <div class="col-9 input-box">
              <label for="inputConfirmPassword" class="form-label">Confirme sua senha:</label>
              <input name="inputConfirmPassword" type="text" class="form-control" id="inputStreet" placeholder="">
            </div>
          </div>
        </div>

         <div class="row mt-4">
            <div class="col-2 input-box">
              <input name="inputSumbit" type="submit" class="form-control btn-submit" id="inputSumbit" value="Atualizar Dados">
            </div>
          </div>
      
       </div>
      </form>
    </div>

    <div class="user-posts">
      <h2>Meus Anúncios</h2>

      <div class="posts-box">

      <div class="post">
        <a class="card" style="width: 18rem;" href="">
          <img src="https://img.olx.com.br/images/12/127245586945449.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-price">R$124,90</p>
          </div>
        </a>
        <a href="../index.php" class="btn-delete-post">Excluir Anúncio</a>  
      </div>

      <div class="post">
        <a class="card" style="width: 18rem;" href="">
          <img src="https://img.olx.com.br/images/12/127245586945449.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-price">R$124,90</p>
          </div>
        </a>
        <a href="../index.php" class="btn-delete-post">Excluir Anúncio</a>  
      </div>

      <div class="post">
        <a class="card" style="width: 18rem;" href="">
          <img src="https://img.olx.com.br/images/12/127245586945449.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="card-price">R$124,90</p>
          </div>
        </a>
        <a href="../index.php" class="btn-delete-post">Excluir Anúncio</a>  
      </div>
      </div>
    </div>
  </main>

  <?php include_once("../components/footer.php")?>

</body>
</html>