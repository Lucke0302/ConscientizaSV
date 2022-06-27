var section = document.getElementById('publicacoes');
var enviar = document.getElementById('enviar');
var button = document.getElementById('publicar');
$(document).ready(function(){
    $.ajax({
        url: "../../controller/tipo/controller.php",
        success: function(retorno){
            if(retorno == 'A' || retorno == 'U'){
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
            else if(retorno == 'O'){
                button.style.display="none";
            }
        }
    });
});
var sla = document.getElementsByClassName('likes');
alert(sla.innerHTML);
$(sla).on('click', function(e){
    alert('ok');
    idrec = e.target.id;
    idsplit = idrec.split('likes');
    id = idsplit[1];
    $.ajax({
        method: "POST",
        url: "../../controller/like/controller.php",
        data: {id},
        success: function(retorno){
            if(retorno == 'semlogin'){                
                alert("Crie uma conta para impulsionar uma reclamação");
            }
            else{
                
                document.body.innerHTML +="<script src='header.js'></script>"
                quant = document.getElementById('quant'+id);
                likes = document.getElementById('likes'+id);
                quant.innerHTML = retorno;
                likes.classList.toggle('ativo');
            }
        }
    });
});