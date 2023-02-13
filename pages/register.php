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
    <?php include_once('../components/header.php') ?>
    <div class="form-box">
        <form method="POST" action="../actions/addUserAction.php">
            <div class="row mt-3">
                <div class="col-3">
                    <label for="inputName" class="form-label">Nome:</label>
                    <input name="inputName"type="text" class="form-control" id="email">
               </div>

                <div class="col-3">
                    <label for="exampleInputEmail" class="form-label">Email:</label>
                    <input name="inputEmail"type="text" class="form-control" id="email">
               </div>
                <div class="col-3">
                    <label for="inputPhone" class="form-label">Telefone:</label>
                    <input name="inputPhone"type="Number" class="form-control" id="phone">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-3">
                    <label for="inputCep" class="form-label">CEP:</label>
                    <input name="inputCep"type="Number" class="form-control" id="cep" onblur="pesquisacep(this.value)">
                </div>
                <div class="col-3">
                    <label for="inputStreet" class="form-label">Rua:</label>
                    <input name="inputStreet"type="text" class="form-control" id="inputStreet">
                </div>
              
                <div class="col-3">
                    <label for="inputDistrict" class="form-label">Bairro:</label>
                    <input name="inputDistrict"type="text" class="form-control" id="inputDistrict">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3">
                    <label for="inputCity" class="form-label">Cidade:</label>
                    <input name="inputCity"type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-3">
                    <label for="inputState" class="form-label">Estado:</label>
                    <select name="inputState" id="inputState" class="form-select" required>
                        <option value="" selected></option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espirito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="inputNumber" class="form-label">Número:</label>
                    <input name="inputNumber"type="Number" class="form-control" id="number">
                </div>
            </div>
            
            <div class="row mt-3">

                <div class="col-3">
                    <label for="inputPassword" class="form-label">Senha:</label>
                    <input name="inputPassword"type="password" class="form-control" id="password">
                </div>
                <div class="col-3">
                    <label for="inputConfirmation" class="form-label">Confirme a Senha:</label>
                    <input name="inputConfirmation"type="password" class="form-control" id="confirmation">
                </div>
                
            </div>
            <button type="submit" class="btn ">Cadastrar</button>
        </form>
    </div>
  
    <?php  include_once('../components/footer.php') ?>
    <script src="../js/pesquisaCep.js"></script>
    
</body>
</html>