<?php 

$nome = $_POST['nome'];
$nasc = $_POST['nasc'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo = 'U';

include('../../model/cadastro.php');
$pessoa = new Cadastro($nome, $nasc, $email, $senha, $tipo);
$pessoa -> Cadastro();

?>