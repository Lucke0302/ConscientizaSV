cancelar = document.getElementById('cancelar');
url = document.referrer.split('view/');
form = document.getElementById('publicar');
$(document).ready(function(){    
    if(url[1] == 'comoajudar/'){
        form.action = '../../controller/publicar/controller.php';    
    }
    if(url[1] == 'publicacoes/'){
        form.action = '../../controller/publicar/controller.php';    
    }
    if(url[1] == 'reclamacoes/'){
        form.action = '../../controller/reclamar/controller.php';    
    }
})
cancelar.addEventListener('click', function(){
    window.location.href = document.referrer;
});