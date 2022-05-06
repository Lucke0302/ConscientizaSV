<?php
include('conexao.php');
class EditUsuario extends Conexao{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
    
    public function getIdUsuario(){
        $conexao = $this->getConexao();
        $select = $conexao -> prepare("select cd_pessoa, ds_nome, ds_email, nm_tipo from tb_pessoa");
        $select -> execute();
        $result = $select->fetchAll();
        foreach($result as $row){ 
        echo "<p>".$row['cd_pessoa']."</p>"; 
    }
    }
    
    public function deletarPessoa(){
        session_start();
        $conexao = $this->getConexao();
        $delete = $conexao -> prepare("delete from tb_reclamacao where cd_pessoa = :id");
        $delete -> bindValue(':id', $this->id);
        $delete -> execute();
        $delete -> closeCursor();
        $delete = $conexao -> prepare("delete from tb_pessoa where cd_pessoa = :id"); 
        $delete -> bindValue(':id', $this->id);
        $delete -> execute();
        $_SESSION['Logado'] == false;  
        header('location: ../../view/');
    }

    public function updateEmail($email){
        $conexao = $this->getConexao();
        $update = $conexao -> prepare("update tb_pessoa set ds_email = :email where cd_pessoa = :id ");
        $update -> bindValue(':id', $this->id);
        $update -> bindParam(':email', $email);
        $update -> execute();
        $update -> closeCursor();
    }
} 
?>