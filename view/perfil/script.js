$(document).ready(function(){
  $("#divemail").click(function(){
    $("#emailnovo").slideToggle("fast");
  });
  $("#divsenha").click(function(){
    $("#senhanova").slideToggle("fast");
  });
});

const btn = document.querySelector('.btn');
const body = document.querySelector('body');
const title = document.querySelector('.title');
const menu = document.querySelector('#ativo');


btn.onclick = function(){
    this.classList.toggle('active');
    body.classList.toggle('active');
    title.classList.toggle('active');
    menu.classList.toggle('active');
    h1.classList.toggle('active');
    sair.classList.toggle('active');
} 