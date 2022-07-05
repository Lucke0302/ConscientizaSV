<?php

require_once('../../model/administrador.php');

$nome = '%'.$_POST['pesquisa'].'%';

$pesquisa = new Administrador();
$pesquisa ->pesquisaPessoas($nome);
?>