<?php

require_once('../../model/editarpublicacao.php');

$id = $_POST['id'];
$conteudo = $_POST['conteudo'];

$edit = new UpdatePost($id, $conteudo);
$edit -> EditarReclamacao();

?>