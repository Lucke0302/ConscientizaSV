<?php
error_reporting(0);
require_once("../../controller/sessionusuario/controller.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="shortcut icon" href="../imagens/logo.png">
<title>Perfil</title>
</head>
<body class="body">
<?php
    include_once('../componentes/menu.php');
?>
<div id="divbemvindo">
<p id="h1" class="sair">Bem Vindo(a), </p>
<form action="../../controller/encerrarsessao/controller.php">
    <input id="sair" class="sair" type="submit" value="Encerrar sessão">
</form>
<form action="../../controller/excluirusuario/controller.php">
    <input id="sair" class="sair" type="submit" value="Excluir conta">
</form>
</div><br>
<!-- <div id="slide">
    <div class="container" id="email">
        <div id="divemail">
            <p id="email">Clique aqui para alterar email</p>
        </div>
        <div id="emailnovo">
            <form action="../../controller/alteraremail/controller.php" method="post"> 
                <input type="text" id="texto" name="email">
                <input type="submit" value="Alterar" id="enviar">
            </form> 
        </div>
    </div> -->
    <!-- <div class="container" id="senha">
        <div id="divsenha">
            <p id="senha">Clique aqui para alterar a senha</p>
        </div>
        <div id="senhanova">
            <form action="../loginalterarsenha/index.php" method="post"> 
                <input type="text" id="texto" name="senhanova">
                <input type="submit" value="Alterar" id="enviar">
            </form> 
        </div>
    </div> -->
</body> 
</html>