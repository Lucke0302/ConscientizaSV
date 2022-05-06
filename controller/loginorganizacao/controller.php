<?php 
session_start();
ob_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

include('../../model/login.php');

$login = new Login($email, $senha);
$login -> LoginOrganizacao();
$login -> getIdOrganizacao();
?>