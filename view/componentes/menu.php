<link rel="stylesheet" type="text/css" href="../componentescss/menu.css">
    <input type="checkbox" id="chk">
    <label for="chk" class="menu-icon">&#9776;</label>
    <nav class="menu" id="principal">
        <ul>
            <li><a href="../homepage/"><img id="logo" src="../imagens/logo.png" alt="Logo Conscientizasv"></a></li>
            <li><a href="../homepage/"><ion-icon name="home-outline"></ion-icon>Início</a></li>
            <li><a href="../sobre/"><ion-icon name="information-circle-outline"></ion-icon>Sobre</a></li>
            <?php
                require_once('../../controller/tipousuario/controller.php');
            ?>
            <!-- <li><a href=""><ion-icon name="person-outline"></ion-icon>Perfil</a></li>
            <li><a href=""><ion-icon name='code-working-outline'></ion-icon>Administrador</a></li> -->
        </ul>
    </nav>