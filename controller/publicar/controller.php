<?php

session_start();

$conteudo = $_POST['conteudo'];

include('../../model/publicacao.php');

$org = $_SESSION['id'];
$publicacao = new Publicacao('default', $conteudo, $org, 'default', 'default');
$publicacao -> setPublicacao();

?>