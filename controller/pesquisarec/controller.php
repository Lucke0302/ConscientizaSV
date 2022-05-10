<?php

error_reporting(0);
require_once('../../model/publicacoes.php');
$pesquisa = $_POST['pesquisa'].'%';

$publicacao = new Publicacoes();
$publicacao->PesquisaRec($pesquisa);