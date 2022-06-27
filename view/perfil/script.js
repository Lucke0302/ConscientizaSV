var nome = document.getElementById('nome');
var email = document.getElementById('email');
var idade = document.getElementById('idade');
$(document).ready(function(){
  $.ajax({
    url: "../../controller/getNome/controller.php",
    success: function(getNome){
      nome.innerHTML = getNome;
    }
  });
  $.ajax({
    url: "../../controller/getEmail/controller.php",
    success: function(getEmail){
      email.innerHTML = getEmail;
    }
  });
  $.ajax({
    url: "../../controller/getIdade/controller.php",
    success: function(getIdade){
      idade.innerHTML = "Idade: "+getIdade;
    }
  });
});