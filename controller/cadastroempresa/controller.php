<?php 

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cnpj = $_POST['cnpj'];
$tipo = "O";

include("../../model/cadastroorg.php");
$organizacao = new CadastroOrg($nome, $cnpj, $email, $senha, $tipo);
$organizacao -> Cadastro();

?>