function limpa_formulário_cep() {
  document.getElementById('street').value = ''
  document.getElementById('district').value = ''
  document.getElementById('city').value = ''
  document.getElementById('state').value = ''
}

function meu_callback(conteudo) {
  if (!('erro' in conteudo)) {
    document.getElementById('street').value = conteudo.logradouro
    document.getElementById('district').value = conteudo.bairro
    document.getElementById('city').value = conteudo.localidade
    document.getElementById('state').value = conteudo.uf
  } else {
    limpa_formulário_cep()
  }
}

function pesquisacep(valor) {
  var cep = valor.replace(/\D/g, '')

  //Verifica se campo cep possui valor informado.
  if (cep != '') {
    var validacep = /^[0-9]{8}$/

    //Valida o formato do CEP.
    if (validacep.test(cep)) {
      document.getElementById('street').value = '...'
      document.getElementById('district').value = '...'
      document.getElementById('city').value = '...'
      document.getElementById('state').value = '...'

      var script = document.createElement('script')
      script.src =
        'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback'

      document.body.appendChild(script)
    } else {
      document.getElementById('continue-button').disabled = true
      limpa_formulário_cep()
    }
  } else {
    limpa_formulário_cep()
  }
}
