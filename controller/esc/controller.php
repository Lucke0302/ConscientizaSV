<?php
require_once('../../model/administrador.php');
$cat = $_POST['cat'];
$sla = new Administrador;
switch ($cat) {
    case 1:
        $sla -> getPublicacoes();
        break;
    case 2:
        $sla -> getCadastros();
        break;
    case 3:
        $sla -> Teste3();
        break;
    case 4:
        $sla -> getPessoas();
        break;
    case 5;
        $sla -> getRanking();
        break;    
}
?>