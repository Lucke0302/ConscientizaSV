$('form').submit(function(){
    var numeros = /([0-9])/;
    var letras = /([a-zA-Z])/;
    var senha = $("#password").val();
    if(senha.length >= 6 && senha.match(numeros) && senha.match(letras)){
        $("#senha").val();
        return true;
    }
    else{
        alert("A senha deve ter no mínimo 6 caracteres, com no mínimo uma letra minúscula, uma máiúscula e um número!");
        return false;
    }
});