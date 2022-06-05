<?php

session_start();

require_once('../../model/publicacao.php');

$org = $_SESSION['idorg'];

$conteudo = $_POST['input'];

$publicacao = new Publicacao('default', $conteudo, $org);
$publicacao -> setPublicacao();
?>