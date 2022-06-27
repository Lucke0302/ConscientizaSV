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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="shortcut icon" href="../imagens/logo.png">
<title>Perfil</title>
</head>
<div class="perfil">
        <p id="nome">
        </p>
        <p id="email">
        </p>
        <p id="idade">
        </p>  
    </div>
    <div id="acoes">   
        <!-- <a href="../minhasrecs/">--><a><div class="recs">Editar</div></a><a href="../minhasreclamacoes/"><div class="recs">Minhas reclamações</div></a>  
    </div>    
    <script src="script.js"></script>
<?php
    include_once('../componentes/menu.php');
?>
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