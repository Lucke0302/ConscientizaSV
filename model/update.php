<?php
include('conexao.php');

class Update extends Conexao{

    protected $email;
    protected $senha;

    public function __construct($email, $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function EditarSenhaUsuario(){
        $conexao = $this->getConexao();
        try{
            $update = $conexao -> prepare("update tb_pessoa where email = :email set senha = :senha");
            $update -> bindValue(':email', $this->email);
            $update -> bindValue(':senha', $this->senha);
            $update -> execute();
            $update -> closeCursor();
        }
        catch(PDOException $e){
            echo $e;
        }
    }

    public function EditarSenhaOrganizacao(){
        $conexao = $this->getConexao();
        try{
            $update = $conexao -> prepare("update tb_organizacao where email = :email set senha = :senha");
            $update -> bindValue(':email', $this->email);
            $update -> bindValue(':senha', $this->senha);
            $update -> execute();
            $update -> closeCursor();
        }
        catch(PDOException $e){
            echo $e;
        }
    }
}
?>