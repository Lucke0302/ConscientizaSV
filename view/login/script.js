$(document).on('click', '#button', function(){
    var email = document.getElementById('email').value;
    var senha = document.getElementById('password').value;
    $.ajax({
        method: "POST",
        data: {email, senha},
        url: "../../controller/loginusuario/controller.php",
        success: function(retorno){
            if(retorno == 'false'){
                document.getElementById('alertasenha').innerHTML = '';
                document.getElementById('alertasenha').innerHTML = 'Login ou senha inválidos';
                document.getElementById('alertasenha').style.color = 'Red';
            }
            else{
                window.location.href = "../homepage/";
            }
        }
    });
});