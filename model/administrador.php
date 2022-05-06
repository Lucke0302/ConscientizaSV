<?php
include_once('conexao.php');

class Administrador extends Conexao{

    public function getPessoas(){
        $conexao = $this -> getConexao();
        $select = $conexao ->prepare('select * from tb_pessoa');
        $select -> execute();
        $result = $select->fetchAll();
        foreach($result as $row){
            echo "<tr>
                    <td>".$row['ds_nome']."</td>
                    <td>".$row['ds_email']."</td>
                    <td>".$row['nm_tipo']."</td>
                  </tr>";   
        } 
        $select -> closeCursor();
    }

    public function getOptions(){
        $select = $this-> getConexao()->prepare("select ds_nome from tb_pessoa");
        $select -> execute();
        $result = $select-> fetchAll();
        foreach($result as $row){
            $nomeex = explode(' ', $row['ds_nome']);
            $nome = implode('-', $nomeex);
            echo "<option value=".$nome.">".$row['ds_nome']."</option>";
        }   
    }

    public function getIdbyName($nome){
        $nomeex = explode('-', $nome);
        $nomereal = implode(' ', $nomeex);  
        $select = $this->getConexao()->prepare("select cd_pessoa from tb_pessoa where ds_nome = :nome");
        $select -> bindParam(':nome', $nomereal);
        $select -> execute();
        $result = $select -> fetchAll();        
        $select -> closeCursor();
        foreach($result as $row){
            return $row['cd_pessoa'];
        }
    }

    public function setTipo($id){
        $conexao = $this -> getConexao();
        $select = $conexao ->prepare('select nm_tipo from tb_pessoa where cd_pessoa = :id');
        $select -> bindValue(':id', $id);
        $select -> execute();
        $result = $select -> fetchAll();
        $select -> closeCursor();
        foreach($result as $row){
            if($row['nm_tipo'] == 'A'){
                $update = $this->getConexao()->prepare("update tb_pessoa set nm_tipo = 'U' where cd_pessoa = :id");
                $update -> bindParam(':id', $id);
                $update -> execute();
                header('location: ../../view/administrador/');
            }
            else if($row['nm_tipo'] == 'U'){
                $update = $this->getConexao()->prepare("update tb_pessoa set nm_tipo = 'A' where cd_pessoa = :id");
                $update -> bindParam(':id', $id);
                $update -> execute();
                header('location: ../../view/administrador/');
            }
        }
    }
}