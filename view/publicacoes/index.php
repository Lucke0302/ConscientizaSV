<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
    <link rel="stylesheet" type="text/css" href="../componentescss/footer.css">
    <link rel="stylesheet" type="text/css" href="style.css">  
    <link rel="shortcut icon" href="../imagens/logo.png">  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../componentescss/header.css">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0);
        include_once('../componentes/footer.php');        
        include_once('../componentes/header.php'); 
        include_once('../componentes/menu.php');       
        require_once('../../controller/publicacoes/controller.php');
    ?>
    <script src="header.js"></script>
</body>
</html>