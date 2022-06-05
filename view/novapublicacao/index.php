<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="jquery.cleditor.css" />
    <script src="jquery.cleditor.min.js"></script>
    <script src="jquery.cleditor.js"></script>
    <link rel="shortcut icon" href="../imagens/logo.png">
    <title>Document</title>
</head>
<body>    
    <form id='publicar' action="" method="POST">
        <p id="h1">Nova Publicação</p>
        <!-- <label for='local'>Local: </label>
        <input type='text' name="local" id='local'><br> -->
        <label for='local'>Conteúdo</label><br>
        <textarea id="input" name="input"></textarea>
    <script>
        $(document).ready(function () { $("#input").cleditor(); });
    </script>
        <input id="enviar" type="submit" value="Enviar">
        <input id="cancelar" type="button" value="Cancelar">
    </div>
    <?php session_start(); echo"<script>alert('".$_SESSION['id']."')</script>";?>
    <script src="script.js"></script>
</body>
</html>