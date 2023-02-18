<?php require_once('../actions/authenticate.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anunciar</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="../styles/addPost.css">
</head>
<body>
  <?php include_once('../components/header.php') ?>
  <?php require('../components/alertMessage.php')?>

  <main>
      <h1>Anunciar</h1>
      <div class="box-main">
        <form action="../actions/addPostAction.php" method="POST" enctype="multipart/form-data">
              <div class="col-12 position-relative">
                  <label for="inputTitle" class="form-label">Título do Anúncio:</label>
                  <input name="inputTitle"type="text" class="form-control" id="title" required minlength="5" onchange="return valida_form_title(this)">
                  <div id="validationServerUsernameFeedback" class="invalid-tooltip">O título deve possuir no minímo 5 caracteres</div>
               </div>

               <div class="col-12 position-relative">
                  <label for="inputContent" class="form-label">Descrição:</label>
                  <textarea name="inputContent"type="text" class="form-control" id="content" required minlength="30" maxlength="150" onchange="return valida_form_content(this)"></textarea>
                  <div id="validationServerUsernameFeedback" class="invalid-tooltip">A descrição deve possuir no minímo 30 caracteres e máximo de 150</div>
               </div>

                <div class="col-12 position-relative">
                    <label for="inputCategory" class="form-label">Categoria:</label>
                    <select name="inputCategory" id="category" class="form-select" required onchange="return valida_form_category(this)">
                        <option value="F" selected>Feminino</option>
                        <option value="M">Masculino</option>
                        <option value="I">Infantil</option>
                        <option value="U">Unisex</option>
                    </select>
                    <div id="validationServerUsernameFeedback" class="invalid-tooltip">Preencha o nome corretamente!</div>
                </div>

                <div class="col-4 position-relative">
                  <label for="inputPrice" class="form-label">Preço:</label>
                  <input name="inputPrice" step="any" type="number" id="price" class="form-control" required id="content" onchange="return valida_form_price(this)"></input>
                  <div id="validationServerUsernameFeedback" class="invalid-tooltip">Preencha o nome corretamente!</div>
               </div>

                <div class="col-12 position-relative">
                  <label for="inputImg" class="form-label">Imagem:</label>
                  <input name="inputImg" type="file" accept="image/png,image/jpeg,image/jpg" required class="form-control" id="img" onchange="return valida_form_img(this)"></input>
                  <div id="validationServerUsernameFeedback" class="invalid-tooltip">Preencha o nome corretamente!</div>
               </div>

                <div class="col-12 position-relative">
                  <input name="inputSubmit" type="submit" class="form-control btn-submit" id="submit" value="Anunciar"></input>
               </div>

        </form>
      </div>
  </main>
  
  <?php  include_once('../components/footer.php') ?>
  <script type="text/javascript" src="../js/checkFormPost.js"></script>

</body>
</html>