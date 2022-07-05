<?php

require_once('../../model/administrador.php');

$id = $_POST['id'];

$update = new Administrador();
$update -> mudarTipo($id);
?>