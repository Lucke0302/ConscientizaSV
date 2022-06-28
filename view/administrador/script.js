var cat1 = document.getElementById('cat1');
var cat2 = document.getElementById('cat2');
var cat3 = document.getElementById('cat3');
var cat4 = document.getElementById('cat4');
var cat5 = document.getElementById('cat5');
cat1.addEventListener('click', function(){   
        cat = 1;   
        $.ajax({
                method: "POST",
                url: "../../controller/esc/controller.php",
                data: {cat},
                success: function(retorno){
                        document.getElementById('conteudo').innerHTML = retorno;
                }
        });
});
cat2.addEventListener('click', function(){   
        cat = 2;   
        $.ajax({
                method: "POST",
                url: "../../controller/esc/controller.php",
                data: {cat},
                success: function(retorno){
                        document.getElementById('conteudo').innerHTML = retorno;
                }
        });
});
cat3.addEventListener('click', function(){   
        cat = 3;   
        $.ajax({
                method: "POST",
                url: "../../controller/esc/controller.php",
                data: {cat},
                success: function(retorno){
                        document.getElementById('conteudo').innerHTML = retorno;
                }
        });
});

cat4.addEventListener('click', function(){   
        cat = 4;   
        $.ajax({
                method: "POST",
                url: "../../controller/esc/controller.php",
                data: {cat},
                success: function(retorno){                     
                        document.getElementById('conteudo').innerHTML = retorno;
                        var script = document.createElement('script');
                        script.src = "script.js"; 
                        document.body.appendChild(script);
                }
        });
});

cat5.addEventListener('click', function(){   
       window.location.href = '../ranking/';
});
setInterval(function(){                          
        var search = document.getElementById('nome');
        $(search).on('click', function(){
                $(search).keypress(function(event){  
                        if(event.key == "Enter"){                 
                                var search = document.getElementById('nome'); 
                                var pesquisa = search.value;  
                                if(pesquisa.length >= 3){
                                        $.ajax({
                                                url: "pesquisa.php",
                                                method: "POST",
                                                data: {pesquisa},
                                                success: function(retorno){
                                                        document.getElementById('conteudo').innerHTML = retorno;
                                                        search.innerHTML = pesquisa;
                                                        var script = document.createElement('script');
                                                        script.src = "script.js";
                                                        document.body.appendChild(script);
                                                }
                                        });
                                };
                        };
                ;})
        });
}, 500);


        var mudar = document.getElementsByClassName('button');
        $(mudar).on('click', function(){
                idpes = this.id;
                idsplit = idpes.split('pes');
                id = idsplit[1];
                $.ajax({
                        url: "mudartipo.php",
                        method: "POST",
                        data: {id},
                        success: function(retorno){
                                alert('Tipo modificado com sucesso, novo tipo: '+retorno)
                                window.location.reload();
                        }
                });
        });