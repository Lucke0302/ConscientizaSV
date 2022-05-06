<?php 
include("../../model/atributosusuario.php");
session_start();
$id = $_SESSION['id'];
$email = new Selecionar($id);
$email -> getTipoUsuario(); 
if($_SESSION['tipo'] == "U" || $_SESSION['tipo'] == "A"){
    $email -> getEmailPessoa();
}
else if($_SESSION['tipo'] == "O"){
    $email -> getEmailOrganizacao();
}
?>