<?php

session_start();
ob_start();

$username = "root";

require_once("conexao.php");

try {

  $queryS = $conexao->prepare("SELECT * from pessoa where dsEmail = :email and dsSenha = :senha");  
  $queryS->bindParam(':email', $email);
  $queryS->bindParam(':senha', $senha);
  $queryS->execute();

  $pessoa = $queryS->rowCount();

    $row = $queryS->fetch(PDO::FETCH_ASSOC);

    if($pessoa != 0){
        $_SESSION['id'] = $row['cd_pessoa'];
        $_SESSION['nome'] = $row['ds_nome'];
        $_SESSION['email'] = $row['ds_email'];
        $_SESSION['nascimento'] = $row['dt_nasc'];
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