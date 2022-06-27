var input = document.querySelector("#search");
var body = document.querySelectorAll("body");
$(document).ready(function(){
    var botao = document.getElementById("publicar");    
    if(document.URL == 'http://localhost/ConscientizaSV/view/publicacoes/'){
        input.placeholder = "Pesquise uma ONG";
    }
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
$(input).on('click', function(){
    $(input).keypress(function(e){     
        var section = document.getElementById("publicacoes");
        var pesquisa = input.value;  
        var url = document.URL;
        var local = url.split('view');
        if(local[1] == '/publicacoes/' || local[1] == '/comoajudar/'){
            if(e.key == "Enter"){
                $.ajax({
                    method: "POST",
                    data:{pesquisa},
                    url: '../../controller/pesquisapub/controller.php',
                    success: function(publis){
                        section.innerHTML = publis;
                        body.innerHTML += "<script src='header.js'></script>";
                    }
                });
            }  
        }
        else if(local[1] == '/reclamacoes/'){
            if(e.key == "Enter"){
                $.ajax({
                    method: "POST",
                    data:{pesquisa},
                    url: '../../controller/pesquisarec/controller.php',
                    success: function(publis){
                        section.innerHTML = publis + " <script src='header2.js'></script>";
                    }
                });
            }  
        }
    ;})
});