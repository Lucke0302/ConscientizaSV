reclamacoes = document.getElementById('minhasreclamacoes');
div = document.getElementsByClassName('editar');
$(div).on('click', function(){
    idrec = this.id;
    idsplit = idrec.split('rec');
    id = idsplit[1];
    window.location.href = '../editarpublicacao/index.php?id='+id;
});