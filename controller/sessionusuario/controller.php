<?php

session_start();
ob_start();
error_reporting(0);

if($_SESSION['Logado'] == true){  
}
else{
  header('location: ../homepage/');
}

?>