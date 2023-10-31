//Botão
let scrollButton = document.getElementById("goUpButton");

//Ao descer uma porcentagem x da página, o botão vai aparecer
window.onscroll = function() {scrollFunction()};

function scrollFunction() {

  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollButton.style.display = "block";
  } else {
    scrollButton.style.display = "none";
  }
}

//Se clicar no botão, vai subir pra cima
function topFunction() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}