<?php

require_once('../../model/publicacoes.php');

$id = $_POST['id'];

$publi = new Publicacoes();
$publi -> RecEditar($id);

?>