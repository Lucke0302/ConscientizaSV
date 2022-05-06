<?php
session_start();
error_reporting(0);
require_once("../../controller/administrador/controller.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo.png">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/> 
    <title>Administrador</title>
</head>
<body>
<div id="editar"> 
        <form  id="form" action="../../controller/getoptions/getidoption.php" method="post"><br>
            <select name="nome" id="pessoas">
            </select>
            <input id="enviar" type="submit" value="Alterar Tipo">
        </form>
        <table>
            <tr>
                <td>Nome</td>
                <td>E-mail</td> 
                <td>Tipo do Usuário</td>
            </tr>
            <?php require_once("../../controller/selectusuarios/controller.php") ?>
    </table>
</div>
    <script type="text/javascript" src="script.js"></script> 
<?php 
    include('../componentes/menu.php');
?>    
</body>
</html>