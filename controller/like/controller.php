<?php
session_start();

require_once('../../model/likes.php');

$iduser = $_SESSION['id'];
$idrec = $_POST['id'];

$like = new Likes($iduser, $idrec);
$like -> updateLikesRec();
?>