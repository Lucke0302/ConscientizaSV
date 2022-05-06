<?php 

$telefone = $_POST['telefone'];
$_SESSION['id'] = $id;
require_once("../conexao/controller.php");

try{

    $queryI = $conexao->prepare("INSERT INTO tb_telefone (cd_telefone, cd_organizacao, ds_telefone)
    VALUES (default, :id, :telefone)");
    $queryI->bindParam(':id', $id);
    $queryI->bindParam(':telefone', $telefone);
    $queryI->execute();

    echo "<script>
    var mensagem;
    var retorno = confirm('Telefone cadastrado');
    if (retorno == true)
    {
        window.location.href = '../view/login.php';
    }
    else
    {
    }
    </script>";
}
catch(PDOException $e){
    echo ( $e -> getMessage());
}
?>