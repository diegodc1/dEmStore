<?php session_start();
    require('../components/checkForms.php');
?>
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
    <?php require('../components/alertMessage.php')?>
    
    <h1>Cadastra-se</h1>

    <div class="form-box">
        <form method="POST" action="../actions/addUserAction.php">
            <div class="row mt-3">
                <div class="col-3 position-relative">
                    <label for="inputName" class="form-label">Nome:</label>
                    <input name="inputName"type="text" class="form-control" minlength="3" autocomplete="none" required onchange="return valida_form_nome(this)" id="nome" >
                    <div id="validationServerUsernameFeedback" class="invalid-tooltip">Preencha o nome corretamente!</div>
               </div>

                <div class="col-3 position-relative">
                    <label for="exampleInputEmail" class="form-label">Email:</label>
                    <input name="inputEmail"type="email" class="form-control" id="email" autocomplete="none" minlength="3" required onchange="return valida_form_email(this)">
                    <div id="validationServerUsernameFeedback" class="invalid-tooltip">Preencha o email corretamente!</div>
               </div>
                <div class="col-3 position-relative">
                    <label for="inputPhone" class="form-label">Telefone:</label>
                    <input name="inputPhone"type="text" class="form-control" id="phone" autocomplete="none" required onchange="return valida_form_phone(this)" maxlength="13" OnKeyPress="formatar('##-#####-####', this)">
                    <div id="validationServerUsernameFeedback" class="invalid-tooltip">Preencha o telefone corretamente!</div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-3 position-relative">
                    <label for="inputCep" class="form-label">CEP:</label>
                    <input name="inputCep" type="number" step="any" class="form-control" autocomplete="none" id="cep" required onblur="pesquisacep(this.value)" onchange="return valida_form_cep(this)">
                    <div id="validationServerUsernameFeedback" class="invalid-tooltip">Preencha o CEP corretamente!</div>
                </div>
                <div class="col-3 position-relative">
                    <label for="inputStreet" class="form-label">Rua:</label>
                    <input name="inputStreet"type="text" class="form-control" id="street" required onchange="return valida_form_street(this)">
                    <div id="validationServerUsernameFeedback" class="invalid-tooltip">Preencha a rua corretamente!</div>
                </div>
              
                <div class="col-3 position-relative">
                    <label for="inputDistrict" class="form-label">Bairro:</label>
                    <input name="inputDistrict"type="text" class="form-control" id="district"  required onchange="return valida_form_district(this)">
                    <div id="validationServerUsernameFeedback" class="invalid-tooltip">Preencha o bairro corretamente!</div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3 position-relative">
                    <label for="inputCity" class="form-label">Cidade:</label>
                    <input name="inputCity"type="text" class="form-control"  id="city" required onchange="return valida_form_city(this)">
                    <div id="validationServerUsernameFeedback" class="invalid-tooltip">Preencha a cidade corretamente!</div>
                </div>
                <div class="col-3 position-relative">
                    <label for="inputState" class="form-label">Estado:</label>
                    <select name="inputState" id="state" class="form-select" required onchange="return valida_form_state(this)">
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
                    <div id="validationServerUsernameFeedback" class="invalid-tooltip">Preencha o estado corretamente!</div>
                </div>
                <div class="col-3 position-relative">
                    <label for="inputNumber" class="form-label">Número:</label>
                    <input name="inputNumber"type="Number" class="form-control" id="number" required onchange="return valida_form_number(this)">
                    <div id="validationServerUsernameFeedback" class="invalid-tooltip">Preencha o número corretamente!</div>
                </div>
            </div>
            
            <div class="row mt-3">

                <div class="col-3 position-relative">
                    <label for="inputPassword" class="form-label">Senha:</label>
                    <input name="inputPassword"type="password" class="form-control" id="password" required onchange="return valida_form_password(this)">
                    <div id="validationServerUsernameFeedback" class="invalid-tooltip">As senhas devem ser iguais!</div>
                </div>
                <div class="col-3 position-relative">
                    <label for="inputConfirmation" class="form-label">Confirme a Senha:</label>
                    <input name="inputConfirmation"type="password" class="form-control" id="confirmation" required onchange="return valida_form_confirm(this)">
                    <div id="validationServerUsernameFeedback" class="invalid-tooltip">As senhas devem ser iguais!</div>
                </div>
            </div>
            <button type="submit" class="btn ">Cadastrar</button>
        </form>
    </div>
  
    <?php  include_once('../components/footer.php') ?>
    <script src="../js/pesquisaCep.js"></script>
    <script type="text/javascript" src="../js/checkFormRegister.js"></script>

    <script>
        function formatar(mascara, documento) {
            var i = documento.value.length;
            var saida = mascara.substring(0, 1);
            var texto = mascara.substring(i)

            if (texto.substring(0, 1) != saida) {
                documento.value += texto.substring(0, 1);
            }
        }
    </script>
    
</body>
</html>