<?php 
include('conexao.php');

class SelectPost extends Conexao{
    protected $id;

    public function __construct($id)
    {
        session_start();
        $id = $_SESSION['id'];
        $this->id = $id;
    }

    public function getReclamacoes(){
        $conexao = $this->getConexao();
        $select = $conexao -> prepare ("select cd_reclamacao, ds_conteudo from tb_reclamacao where cd_pessoa = :id");
        $select -> bindValue(':id', $this->id);
        $select -> execute();
        $result = $select -> fetchAll();
        foreach ($result as $row){
            echo "<p>".$row['cd_reclamacao']."</p>",
            "<p>".$row['cd_reclamacao']."</p>";
        }
    }
}
?>