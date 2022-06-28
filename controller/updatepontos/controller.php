<?php

require_once("../../model/administrador.php");

$id = $_POST['id'];
$acao = $_POST['acao'];

$update = new Administrador();
$update -> updatePontos($id, $acao);

?>