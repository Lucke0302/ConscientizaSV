var section = document.getElementById('publicacoes');
var enviar = document.getElementById('enviar');
var button = document.getElementById('publicar');
$(document).ready(function(){
    $.ajax({
        url: "../../controller/tipo/controller.php",
        success: function(retorno){
            if(retorno == 'O'){
                $(button).on('click', function(){  
                    window.location.href = "../novapublicacao/";
                });
                width = innerWidth;
                if(width < 700){    
                    button.innerHTML = 'Publicar';
                    button.style.width = "100px";
                }
                else{
                    button.style.width = "2.5vw";
                    $(button).on('mouseenter', function(){
                    button.innerHTML = '+ Publicar';   
                    button.style.animation = "botao 0.6s forwards";
                    });
                    $(button).on('mouseleave', function(){
                    button.innerHTML = '+';    
                    button.style.animation = "none";
                });
                }
            }
            else if(retorno == 'A' || retorno == 'U'){
                button.style.display="none";
                button.innerHTML = null;
            }
        }
    });
});