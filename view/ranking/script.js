var button = document.getElementsByClassName("button");
$(button).on('click', function(){
    if(this.id.match("mais")){
        idsplit = this.id.split('mais');
        id = idsplit[1];
        acao = "+"
    }
    else{        
        idsplit = this.id.split('menos');
        id = idsplit[1];
        acao = "-"
    }
    $.ajax({
        url: "../../controller/updatepontos/controller.php",
        method: "POST",
        data: {id, acao},
        success: function(pontos){
            quant = document.getElementById("pontos"+id);
            quant.innerHTML = pontos;
        }
    });
});