<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="../styles/login.css">
  <link rel="stylesheet" href="../styles/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include_once('../components/header.php') ?>

    <main>

      <div class="box-right">
        <div class="box-login">
          <h2>Login</h2>
          <div class="line"></div>
          <form action="../actions/loginUserAction.php" method="POST">
            <div class="row">
                <div class="col-16 input-box">
                    <label for="inputEmail" class="form-label">Email:</label>
                    <input name="inputEmail" type="text" class="form-control" id="" placeholder="Digite seu email">
               </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 input-box">
                    <label for="inputPassword" class="form-label">Senha:</label>
                    <input name="inputPassword" type="password" class="form-control" id="" placeholder="Digite sua senha">
               </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 input-box">
                   <input name="inputSumbit" type="submit" class="form-control btn-submit" id="" value="Entrar">
               </div>
            </div>
          </form>

          <div class="line"></div>

          <p class="register-message">Não tem um conta? <a href="../pages/register.php">Cadastre-se</a></p>
        </div>
      </div>
    </main>



</body>
</html>