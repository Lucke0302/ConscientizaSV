<?php 

error_reporting(0);
$email = $_POST['email'];
$senha = $_POST['senha'];

include('../../model/login.php');

$login = new Login($email, $senha);
$login -> VerificarEmail();
$login -> getIdPessoa();
?>