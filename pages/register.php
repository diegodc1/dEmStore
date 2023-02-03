<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../styles/register.css">
</head>
<body>
    <?php include_once('../components/hearder.php') ?>


        <div class="form-box">

        <form>
            <div class="col-2">
                <label for="exampleInputName" class="form-label">Nome</label>
                <input name="inputName"type="text" class="form-control" id="name">
                <label for="exampleInputCpf" class="form-label">CPF</label>
                <input name="inputCpf"type="text" class="form-control" id="cpf">
            </div>
            <div class="row">

                <div class="col-3">
                    <label for="exampleInputEmail" class="form-label">Email</label>
                    <input name="inputEmail "type="text" class="form-control" id="email">
               </div>
                <div class="col-3">
                    <label for="exampleInputPhone" class="form-label">Telefone</label>
                    <input name="inputFone "type="Number" class="form-control" id="phone">
                </div>

            </div>
            <div class="row">
                <div class="col-3">
                    <label for="exampleInputCep" class="form-label">CEP</label>
                    <input name="inputCpe "type="Number" class="form-control" id="cep">
                </div>
                <div class="col-3">
                    <label for="exampleInputNumber" class="form-label">Número</label>
                    <input name="inputNumber "type="Number" class="form-control" id="number">
                </div>
                <div class="col-3">
                    <label for="exampleInputState" class="form-label">Estado</label>
                    <input name="inputState "type="text" class="form-control" id="state">
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="exampleInputCity" class="form-label">Cidade</label>
                    <input name="inputCity "type="text" class="form-control" id="city">
                </div>
                <div class="col-3">
                    <label for="exampleInputStreet" class="form-label">Rua</label>
                    <input name="inputStreet "type="text" class="form-control" id="street">
                </div>
            </div>
            
            <div class="row">

                <div class="col-3">
                    <label for="exampleInputPassword" class="form-label">Senha</label>
                    <input name="inputPassword "type="Number" class="form-control" id="password">
                </div>
                <div class="col-3">
                    <label for="exampleInputConfirmation" class="form-label">Confirme a Senha</label>
                    <input name="inputConfirmation "type="Number" class="form-control" id="confirmation">
                </div>
                
            </div>
            <button type="submit" class="btn ">Cadastrar</button>
  

  
</form>
        </div>










     <?php  include_once('../components/footer.php') ?>  
    
</body>
</html>