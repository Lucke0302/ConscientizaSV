<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="shortcut icon" href="../imagens/logo.png">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Cadastro - Organização</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <a href="../escolhaorganizacao/" class="icon"><ion-icon size="large" name="arrow-back-outline"></ion-icon></a>
        <h1>CADASTRO - ORGANIZAÇÃO</h1>
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
        </div>

        <div class="alternative">
            <span>OU</span>
        </div> -->

          <form action="../../controller/cadastroempresa/controller.php" method="post">
            <label for = "empresa">
                <span> Nome da organização:</span>
                <input type="text" id = "empresa" name= "nome" placeholder="Nome" autofocus="true" required>
            </label>
      
            <label for="cpf">
                <span>CPF/CNPJ:</span>
                <input type="text" id="cpf" name="cnpj" placeholder="XXXXXXXX0001XX" maxlength="18" required>
                <p id="resp"></p>
            </label>

            <label for="email">
                <span>E-mail:</span>
                <input type="email" id="email" name="email" placeholder="email@email.com" required>
            </label>

            <label for= "password">
              <span> Senha:</span>

              <input type= "password" id="senha" name="senha" placeholder="*********" minlength="6" maxlength="200" required> 
              <p id="respsenha"></p>

            <input type="submit" value="CRIAR" id="button">
            

        </form>
        <script src="script.js"></script>
    </main>   
</body>
</html>