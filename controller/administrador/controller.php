<?php

session_start();
$id = $_SESSION['id'];
include('../../model/atributosusuario.php');
$tipo = new Selecionar($id);
if($tipo -> verificarAdm() == true){

} 
else if($tipo -> verificarAdm() == false){
    if($_SESSION['Logado'] == true){
        header('location: ../../view/perfil');
    }    
    else if($_SESSION['Logado'] == false){
        header('location: ../../view/homepag');
    }
}

?>