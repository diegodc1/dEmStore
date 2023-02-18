<?php 
require_once('../db/config.php');
include_once('../dao/UsuarioDao.php');
require_once('../dao/PostDao.php');
require_once('../actions/authenticate.php');

$usuarioDao = new UsuarioDaoDB($pdo);
$postDao = new postDaoDB($pdo);

$user = $usuarioDao->findById($_SESSION['user_id']);

$userPosts = $postDao->findByUserId($_SESSION['user_id']);
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
      <?php require('../components/alertMessage.php')?>
      <h1>Meu cadastro</h1>
      <form action="../actions/updateUserAction.php" method="POST">
        <div class="row row-box">

          <div class="row-left">
            <h3>Dados Pessoais:</h3>
            <input name="id" type="hidden" class="form-control" id="id" required value="<?= $user->getId()?>">

            <div class="col-10 input-box">
              <label for="inputName" class="form-label">Nome:</label>
              <input name="inputName" type="text" class="form-control" id="emailInput" required value="<?= $user->getName()?>">
            </div>

            <div class="col-10 input-box">
              <label for="inputPhone" class="form-label">Telefone:</label>
              <input name="inputPhone" type="text" class="form-control" id="inputPhone" required value="<?= $user->getPhone()?>">
            </div> 

            <div class="col-10 input-box">
              <label for="inputEmail" class="form-label">Email:</label>
              <input name="inputEmail" type="text" class="form-control" id="inputEmail" required value="<?= $user->getEmail()?>">
            </div>

            <input name="inputSumbit" type="submit" class="form-control btn-submit" id="inputSumbit" value="Atualizar Dados">
          </div>

          <div class="row-midle">
            <h3>Endereço:</h3>


            <div class="col-10 input-box">
              <label for="inputDistrict" class="form-label">Bairro:</label>
              <input name="inputDistrict" type="text" class="form-control" id="inputStreet" required value="<?= $user->getDistric()?>">
            </div>

            <div class="col-10 input-box">
              <label for="inputCity" class="form-label">Cidade:</label>
              <input name="inputCity" type="text" class="form-control" id="inputStreet" required value="<?= $user->getCity()?>">
            </div>
        </div>
        

        </form>
       
        <div class="row-right">
          <form action="../actions/udpatePassword.php" method="POST">
            <h3>Senha</h3>
            <input name="id" type="hidden" class="form-control" id="id" required value="<?= $user->getId()?>">
            <div class="col-9 input-box">
              <label for="password1" class="form-label">Senha:</label>
              <input name="password1" type="password" class="form-control" required placeholder="">
            </div>

            <div class="col-9 input-box">
              <label for="confirmPass" class="form-label">Confirme sua senha:</label>
              <input name="confirmPass" type="password" class="form-control" required placeholder="">
            </div>
            <input name="inputSumbit" type="submit" class="form-control btn-submit" id="inputSumbit" value="Atualizar Senha">
          </form>
        </div>
     
    </div>
    </div>

    <div class="user-posts">
      <h2>Meus Anúncios</h2>

      <div class="posts-box">

      <?php foreach($userPosts as $post): ?>
        <div class="post">
          <a class="card" style="width: 18rem;" href="../pages/post.php?id=<?= $post->getId()?>">
            <img src="../images/<?= $post->getImgPath()?>" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="body-card-1">
                <h5 class="card-title"><?= $post->getTitle()?></h5>
                <p class="card-text"><?= $post->getContent()?></p>
              </div>
              <div class="body-card-2">
                <p class="card-price">R$<?= number_format($post->getPrice(),2, ",", ".") ?></p>
                <p><?= $post->getViews()?> visualizações</p>
              </div>
            </div>
          </a> 
          <button type="button" class="btn-delete-post" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $post->getId()?>">
            Excluir Anúncio
          </button>
        </div>


        <!-- MODAL -->
        <div class="modal fade" id="deleteModal<?= $post->getId()?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
    
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <i class="fa-solid fa-trash"></i>
                <p class="title-modal-delete">Você realmente deseja excluir este anúncio?</p>
                <div class="post-info-modal">
                  <p>Anúncio:  <?= $post->getTitle()?></p>
                  <p>Data de publicação: <?= date('d/m/Y', strtotime($post->getDate()))?></p>
                  <p>Visualizações: <?= $post->getViews()?></p>
                </div>
                
                <span>Atenção! Após a confirmação, não será possível reverter essa ação!</span>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <a href="../actions/deletePostAction.php?id=<?= $post->getId() ?>" class="btn-delete-post modal-btn">Excluir Anúncio</a> 
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>  

   

      </div>
    </div>
  </main>

  <?php include_once("../components/footer.php")?>

</body>
</html>