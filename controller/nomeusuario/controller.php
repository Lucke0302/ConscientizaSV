<?php 
include("../../model/atributosusuario.php");
session_start();
$id = $_SESSION['id'];
$nome = new Selecionar($id);
$nome -> getNomePessoa();
?>