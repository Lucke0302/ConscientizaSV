cancelar = document.getElementById('cancelar');
input = document.getElementById('input');
form = document.getElementById('editar');
$(document).ready(function(){
    idsplit = document.URL.split('?id=');
    id = idsplit[1];
    $.ajax({
        url: "../../controller/tipo/controller.php",
        success: function(retorno){
            if(retorno == 'A' || retorno == 'U'){
                form.action = '../../controller/editarreclamacao/controller.php';
            }
            else if(retorno == 'O'){
                form.action = '../../controller/editarpublicacao/controller.php';
            }
            else{
                window.location.href = '../homepage/';
            }
        }
    });
    $.ajax({
        url: "../../controller/buscarpublicacao/controller.php",
        data: {id},
        method: "POST",
        success: function (retorno){
            input.innerHTML = retorno;
        }
    });
});
cancelar.addEventListener('click', function(){
    window.location.href = document.referrer;
});