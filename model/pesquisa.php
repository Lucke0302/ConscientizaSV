<?php 
include('conexao.php');
class Pesquisa extends Conexao{
    public function PesquisarOrg($nomeorg){
        $conexao = $this->getConexao();
           $pesquisa = $conexao -> prepare("select ds_nome from tb_organizacao where ds_nome like '%:nomeorg%'"); 
           $pesquisa -> bindParam(':nomeorg', $nomeorg);
           $pesquisa -> execute();
           $result = $pesquisa ->fetchAll();
           if($result <=1){
               echo "<option enabled='false'>Nenhum resultado encontrado</option>";
           }
           else{
               foreach($result as $row){
                   echo "<option>" . $row['ds_nome'] . "</option>";
               }
           }
        }
    }