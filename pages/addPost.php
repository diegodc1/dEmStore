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

  <main>
      <h1>Anunciar</h1>
      <div class="box-main">
        <form action="../actions/addPostAction.php" method="POST" enctype="multipart/form-data">
              <div class="col-12">
                  <label for="inputTitle" class="form-label">Título do Anúncio:</label>
                  <input name="inputTitle"type="text" class="form-control" id="title">
               </div>

               <div class="col-12">
                  <label for="inputContent" class="form-label">Descrição:</label>
                  <textarea name="inputContent"type="text" class="form-control" id="content"></textarea>
               </div>

                <div class="col-12">
                    <label for="inputCategory" class="form-label">Categoria:</label>
                    <select name="inputCategory" id="inputGender" class="form-select" required>
                        <option value="F" selected>Feminino</option>
                        <option value="M">Masculino</option>
                        <option value="I">Infantil</option>
                        <option value="U">Unisex</option>
                    </select>
                </div>

                <div class="col-4">
                  <label for="inputPrice" class="form-label">Preço:</label>
                  <input name="inputPrice" type="number" class="form-control" id="content"></input>
               </div>

                <div class="col-12">
                  <label for="inputImg" class="form-label">Imagem:</label>
                  <input name="inputImg"  type="file"  accept="image/png,image/jpeg,image/jpg" class="form-control" id="content"></input>
               </div>

                <div class="col-12">
                  <input name="inputSubmit" type="submit" class="form-control" id="submit"></input>
               </div>

        </form>
      </div>
  </main>
  
  <?php  include_once('../components/footer.php') ?>

</body>
</html>