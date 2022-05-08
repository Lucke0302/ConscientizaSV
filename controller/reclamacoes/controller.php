<?php
require_once('../../model/publicacoes.php');
$publicacoes = new Publicacoes();
$publicacoes -> getAllRecs();
?>