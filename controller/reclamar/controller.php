<?php

session_start();

$conteudo = nl2br($_POST['input']);

include('../../model/publicacao.php');

$iduser = $_SESSION['id'];
$publicacao = new Publicacao('default', $conteudo, $iduser, 'default', 'default');
$publicacao -> setReclamacao();

?>