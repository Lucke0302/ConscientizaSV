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
var input = document.querySelector("#search");
$(input).on('click', function(){
    $(input).keypress(function(){     
        var section = document.getElementById("publicacoes");
        var pesquisa = input.value;  
        var url = document.URL;
        var local = url.split('view');
        if(local[1] == '/publicacoes/' || local[1] == '/comoajudar/'){
            if(pesquisa.length >2){
                $.ajax({
                    method: "POST",
                    data:{pesquisa},
                    url: '../../controller/pesquisapub/controller.php',
                    success: function(publis){
                        section.innerHTML = publis;
                    }
                });
            }  
        }
        else if(local[1] == '/reclamacoes/'){
            if(pesquisa.length >2){
                $.ajax({
                    method: "POST",
                    data:{pesquisa},
                    url: '../../controller/pesquisarec/controller.php',
                    success: function(publis){
                        section.innerHTML = publis;
                    }
                });
            }  
        }
    ;})
});