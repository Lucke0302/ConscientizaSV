<?php

require_once("../conexao/controller.php");

try {
    $queryS = $conexao->query("SELECT * FROM tb_reclamacao ORDER BY SCORE DESC")->fetchAll();
    foreach ($queryS as $row) {
        echo $row['ds_conteudo']."<br>\n";
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>]