$('form').submit(function(){
    var numeros = /([0-9])/;
    var letras = /([a-zA-Z])/
    var senha = $("#senha").val();
    var data = $("#data").val();
    var ano = data.split("-");
    var atual = new Date;
    var anoatual = atual.getFullYear();
    var anomaximo = anoatual - 100;
    var anominimo = anoatual - 15;
    if(senha.length>=6 && senha.match(numeros) && senha.match(letras)){
        $("#senha").val();
        if(ano[0] >= anomaximo && ano[0] <= anominimo && ano[0].length==4){
            $("#data").val();
            return true;
        }
        else if (ano[0] < anomaximo){
            alert("Acredito que essa não seja a sua idade real!");
            return false;
        }
        else if (ano[0] > anominimo){
            alert("Você deve ter pelo menos 15 anos para utilizar as funções do site!");
            return false;
        }
    }
    else{
        alert("A senha deve ter no mínimo 6 caracteres, com no mínimo uma letra minúscula, uma máiúscula e um número!");
        return false;
    }
});