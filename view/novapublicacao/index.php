<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="../imagens/logo.png">
    <title>Document</title>
</head>
<body>
    <form id='publicar' action="../../controller/publicar/controller.php" method="POST">
        <p id="h1">Nova Publicação</p>
        <label for='local'>Local: </label>
        <input type='text' name="local" id='local'><br>
        <label for='local'>Conteúdo</label><br>
        <textarea form="publicar" name="conteudo" cols='60' rows='15'></textarea><br>
        <input id="enviar" type="submit" value="Enviar">
        <input id="cancelar" type="button" value="Cancelar">
    </div>
    <script src="script.js"></script>
</body>
</html>