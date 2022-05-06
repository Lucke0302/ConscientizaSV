<?php
session_start();

$id = $_SESSION['id'];
include('../../model/editarusuario.php');

$delete = new EditUsuario($id);
$delete -> deletarPessoa();

?>