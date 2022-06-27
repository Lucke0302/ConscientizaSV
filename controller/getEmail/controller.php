<?php 

require_once("../../model/atributosusuario.php");
session_start(); 
$nome = new Selecionar($_SESSION['id']);
$nome -> getEmail();

?>