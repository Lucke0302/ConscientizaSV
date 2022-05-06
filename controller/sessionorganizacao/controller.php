<?php

session_start();
ob_start();

$username = "root";

require_once("../conexao/controller.php");

try {

  $queryS = $conexao->prepare("SELECT * from tb_organizacao where ds_email = :email and ds_senha = :senha");  
  $queryS->bindParam(':email', $email);
  $queryS->bindParam(':senha', $senha);
  $queryS->execute();

  $pessoa = $queryS->rowCount();

    $row = $queryS->fetch(PDO::FETCH_ASSOC);

    if($pessoa != 0){
        $_SESSION['id'] = $row['cd_organizacao'];
        $_SESSION['nome'] = $row['ds_nome'];
        $_SESSION['email'] = $row['ds_email'];
        $_SESSION['cnpj'] = $row['ds_cnpj'];
        $_SESSION['senha'] = $row['ds_senha'];
        $_SESSION['tipo'] = $row['nm_tipo'];
        echo "<script>
            window.location.href = '../view/perfil.php';
       </script>";
    }
} 
catch(PDOException $e) {
  echo $e->getMessage();
}
?>