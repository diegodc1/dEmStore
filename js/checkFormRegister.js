const nome = document.getElementById('nome')
const email = document.getElementById('email')
const telefone = document.getElementById('phone')
const cep = document.getElementById('cep')
const rua = document.getElementById('street')
const bairro = document.getElementById('district')
const cidade = document.getElementById('city')
const estado = document.getElementById('state')
const numero = document.getElementById('number')
const senha = document.getElementById('password')
const confirm = document.getElementById('confirmation')

function valida_form_nome() {
  if (nome.value.length < 3) {
    nome.classList.remove('is-valid')
    nome.classList.add('is-invalid')
  } else {
    nome.classList.remove('is-invalid')
    nome.classList.add('is-valid')
  }
}

function valida_form_email() {
  if (email.value.length < 6) {
    email.classList.remove('is-valid')
    email.classList.add('is-invalid')
  } else {
    email.classList.remove('is-invalid')
    email.classList.add('is-valid')
  }
}

function valida_form_phone() {
  if (telefone.value.length < 13) {
    telefone.classList.remove('is-valid')
    telefone.classList.add('is-invalid')
  } else {
    telefone.classList.remove('is-invalid')
    telefone.classList.add('is-valid')
  }
}

function valida_form_cep() {
  if (cep.value.length < 8) {
    cep.classList.remove('is-valid')
    cep.classList.add('is-invalid')
  } else {
    cep.classList.remove('is-invalid')
    cep.classList.add('is-valid')
  }
}

function valida_form_street() {
  if (rua.value.length < 3) {
    rua.classList.remove('is-valid')
    rua.classList.add('is-invalid')
  } else {
    rua.classList.remove('is-invalid')
    rua.classList.add('is-valid')
  }
}

function valida_form_district() {
  if (bairro.value.length < 2) {
    bairro.classList.remove('is-valid')
    bairro.classList.add('is-invalid')
  } else {
    bairro.classList.remove('is-invalid')
    bairro.classList.add('is-valid')
  }
}

function valida_form_city() {
  if (cidade.value.length < 1) {
    cidade.classList.remove('is-valid')
    cidade.classList.add('is-invalid')
  } else {
    cidade.classList.remove('is-invalid')
    cidade.classList.add('is-valid')
  }
}

function valida_form_state() {
  if (estado.value.length < 3) {
    estado.classList.remove('is-valid')
    estado.classList.add('is-invalid')
  } else {
    estado.classList.remove('is-invalid')
    estado.classList.add('is-valid')
  }
}

function valida_form_number() {
  if (numero.value.length < 1) {
    numero.classList.remove('is-valid')
    numero.classList.add('is-invalid')
  } else {
    numero.classList.remove('is-invalid')
    numero.classList.add('is-valid')
  }
}

function valida_form_password() {
  if (senha.value.length < 2) {
    senha.classList.remove('is-valid')
    senha.classList.add('is-invalid')
  } else {
    senha.classList.remove('is-invalid')
    senha.classList.add('is-valid')
  }
}

function valida_form_confirm() {
  if (senha.value != confirm.value) {
    confirm.classList.remove('is-valid')
    confirm.classList.add('is-invalid')

    senha.classList.remove('is-valid')
    senha.classList.add('is-invalid')
  } else {
    confirm.classList.remove('is-invalid')
    confirm.classList.add('is-valid')

    senha.classList.remove('is-invalid')
    senha.classList.add('is-valid')
  }
}
