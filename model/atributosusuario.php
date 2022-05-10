<?php 
include_once('conexao.php');
class Selecionar extends Conexao{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getTipoUsuario(){
        $conexao = $this->getConexao();
        $select = $conexao -> prepare("select nm_tipo from tb_pessoa where cd_pesssoa = :id");
        $select -> bindValue(':id', $this->id);
        $select -> execute();
        $tipogeral = $select -> fetchAll();
        $qtLinhas = $select ->rowCount();
        if($qtLinhas!=0){
            foreach($tipogeral as $linha){
                $_SESSION['tipo'] = $linha['nm_tipo'];
            }
        }
        else if($qtLinhas==0){
            $select -> closeCursor();
            $select = $conexao -> prepare("select nm_tipo from tb_organizacao where cd_organizacao = :id");
            $select -> bindValue(':id', $this->id);
            $select -> execute();
            $tipogeralorg = $select -> fetchAll();
            $qtLinhasorg = $select ->rowCount();
            if($qtLinhasorg!=0){
                foreach($tipogeralorg as $linhas){
                    $_SESSION['tipo'] = $linhas['nm_tipo'];
                }
            }
            else{
                echo "Erro";
            }
        }
    }    

    public function getEmailPessoa(){
        $conexao = $this->getConexao();
        $select = $conexao -> prepare("select ds_email from tb_pessoa where cd_pessoa = :id");
        $select -> bindValue(':id', $this->id);
        $select -> execute();
        $result = $select->fetch();
        foreach($result as $row){
            $email = $row['ds_email'];
            echo $email;
        }
    } 

    public function getNomePessoa(){
        $conexao = $this->getConexao();
        $select = $conexao -> prepare("select ds_nome from tb_pessoa where cd_pessoa = :id");
        $select -> bindValue(':id', $this->id);
        $select -> execute();
        $result = $select->fetchAll();
        foreach($result as $row){
            $nome = $row['ds_nome'];
            $nomeq = explode(' ', $nome);
            echo "<p id='h1'>".$nomeq[0]."</p>";
        }
    }

    public function getEmailOrganizacao(){
        $conexao = $this->getConexao();
        $select = $conexao -> prepare("select ds_email from tb_organizacao where cd_pessoa = :id");
        $select -> bindValue(':id', $this->id);
        $select -> execute();
        $result = $select->fetchAll();
        foreach($result as $row){
            $email = $row['ds_email'];
            echo $email;
        }
    } 

    public function getNomeOrganizacao(){
        $conexao = $this->getConexao();
        $select = $conexao -> prepare("select ds_nome from tb_organizacao where cd_pessoa = :id");
        $select -> bindValue(':id', $this->id);
        $select -> execute();
        $result = $select->fetchAll();
        foreach($result as $row){
            $nome = $row['ds_nome'];
            echo $nome;
        }
    }

    public function verificarAdm(){
        $conexao = $this->getConexao();
        $select = $conexao -> prepare("select nm_tipo from tb_pessoa where cd_pessoa = :id");
        $select -> bindValue(':id', $this->id);
        $select -> execute();
        $result = $select -> fetchAll();
        $select -> closeCursor();
        foreach($result as $tipo){
            if($tipo['nm_tipo'] != "A"){
                return false;
            }
            else {
                return true;
            }
        } 
    }
}
?>