<?php
session_start();
if($_SESSION['Logado'] == true){
    echo 'true';
}
else{
    echo 'false';
}
?>