<?php
session_start();
error_reporting(0);
require_once("../../controller/sessionlogado/controller.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo.png">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <a href="../escolhausuario/" class="icon"><ion-icon size="large" name="arrow-back-outline"></ion-icon></a>
        <h1>LOGIN</h1>
        <!-- <div class="social-media">
            <a href="#">
                <img src="assets/google.png" alt="Google">
            </a>
            <a href="#">
                <img src="assets/facebook.png" alt="Facebook">
            </a>
            <a href="#">
                <img src="assets/linkedin.png" alt="Linkedin">
            </a>
        </div> -->

          <div id="form">

            <label for="email">
                <span>E-mail:</span>
                <input type="email" id="email" name="email">
                <p id="alertaemail" style="color:transparent"></p>
            </label>

            <label for="password">
                <span>Senha:</span>
                <input type="password" id="password" name="senha">
                <p id="alertasenha" style="color:transparent"></p>
            </label>

            <!-- <div class="alternative">
                <span>OU</span>
            </div> -->
            <label>
                <a class="criar" href="../cadastro/">Ainda não tem uma conta?</a>
            </label>    

            <button id="button" >Enviar</button>
        </div>
    </main>
    <script src="script.js"></script>
</body>