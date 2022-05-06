<?php 
require_once("conexao.php");

try {
 
  $queryS = $conexao->prepare("SELECT * from tb_organizacao");
  $stmt->execute();
  while($row = $stmt->fetchobject()){
    echo "<tr>
    <td>{$row->cd_organizacao}</td>
    <td>{$row->ds_nome_organizacao}</td>
    <td>{$row->ds_email}</td>
    <td>{$row->nm_tipo}</td>
    <td>{$row->ds_cnpj}</td>
    </tr>";
  }
} 
catch(PDOException $e) {
  echo $e->getMessage();
}
?>