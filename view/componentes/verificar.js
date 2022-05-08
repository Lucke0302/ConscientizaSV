$(document).ready(function(){
    var botao = document.getElementById("publicar");
    $.ajax({
        url: '../../controller/session/controller.php',
        success: function(retorno){
            if(retorno == 'true'){
            }            
            else{
                botao.innerHTML = '';
                botao.id = '';
                botao.style.visibility = "hidden";
            }
        }
    });
});