<?php 
session_start();
$id = $_SESSION['id'];
include('../../model/atributosusuario.php');
$tipo = new Selecionar($id);
if($_SESSION['Logado'] == true){
    echo "<li><a href='../perfil/'><ion-icon name='person-outline'></ion-icon>Perfil</a></li>";
    if($tipo -> verificarAdm() == true){
        echo "<li><a href='../administrador/'><ion-icon name='code-working-outline'></ion-icon>Administrador</a></li>";
    } 
    else if($tipo -> verificarAdm() == false){
    }
}    
?>