<?php 
require_once('../../model/administrador.php');

$nome = $_POST['nome'];

$select = new Administrador();
$id = $select -> getIdbyName($nome);
$select -> setTipo($id);