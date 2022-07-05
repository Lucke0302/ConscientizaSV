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

    <link rel="stylesheet" type="text/css" href="adm.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Administrador</title>
</head>
<body>
    <div class="buttons">
        <div class="cat" id="cat1">
            <p class="texto">Total de Publicações e Reclamações hoje</p>
        </div>
        <div class="cat" id="cat2">
            <p class="texto">Total de Cadastros hoje</p>
        </div>
        <div style="visibility: hidden; height: 0px; display:none;" class="cat" id="cat3">
            <p class="texto">Total de Logins hoje</p>
        </div>
        <div class="cat" id="cat4">
            <p class="texto">Editar tipo do usuário</p>
        </div>
        <div class="cat" id="cat5">
            <p class="texto">Ranking</p>
        </div>
    </div>
    <div class="conteudo" id="conteudo">        
    </div>
    <script type="text/javascript" src="script.js"></script> 
<?php 
    include('../componentes/menu.php');
?>    
</body>
</html>