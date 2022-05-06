<?php
session_start();

$id = $_SESSION['id'];
$email = $_POST['email'];

include('../../model/editarusuario.php');

$update = new EditUsuario($id);
$update -> updateEmail($email);
header('location: ../../view/login/');

?>