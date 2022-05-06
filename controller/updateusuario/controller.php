<?php

$id = $_POST['id'];
$tipo = $_POST['tipo'];
include('../../model/administrador.php');

$adm = new Administrador();
$adm -> setTipo($id, $tipo);
header('location: ../../view/administrador');
?>