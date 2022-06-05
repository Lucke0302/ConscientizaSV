<?php
session_start();

require_once('../../model/likes.php');
if(isset($_SESSION['id'])){
    $iduser = $_SESSION['id'];
    $idrec = $_POST['id'];
    
    $like = new Likes($iduser, $idrec);
    $like -> updateLikesRec();
}
else{
    echo "semlogin";
}
?>