<?php

session_start();

$conteudo = $_POST['input'];

include('../../model/publicacao.php');

$org = $_SESSION['id'];
$publicacao = new Publicacao('default', $conteudo, $org);
$publicacao -> setPublicacao();

?>