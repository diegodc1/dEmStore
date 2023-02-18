const title = document.getElementById('title')
const content = document.getElementById('content')
const category = document.getElementById('category')
const price = document.getElementById('price')
const img = document.getElementById('img')

function valida_form_title() {
  if (title.value.length < 5) {
    title.classList.remove('is-valid')
    title.classList.add('is-invalid')
  } else {
    title.classList.remove('is-invalid')
    title.classList.add('is-valid')
  }
}

function valida_form_content() {
  if (content.value.length < 30 || content.value.length > 150) {
    content.classList.remove('is-valid')
    content.classList.add('is-invalid')
  } else {
    content.classList.remove('is-invalid')
    content.classList.add('is-valid')
  }
}

function valida_form_category() {}

function valida_form_price() {
  if (content.value.length < 3) {
    content.classList.remove('is-valid')
    content.classList.add('is-invalid')
  } else {
    content.classList.remove('is-invalid')
    content.classList.add('is-valid')
  }
}
function valida_form_img() {}
