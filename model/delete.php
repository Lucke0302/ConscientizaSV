<?php 
include('conexao.php');
class Delete extends Conexao{

    protected $email;
    protected $senha;

    public function __construct($email, $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }
    
    public function LoginExcluir(){
        $conexao = $this->getConexao();
        try{
        $excluir = $conexao -> prepare("SELECT * FROM tb_pessoa where email = :email and senha = :senha");
        $excluir -> bindValue(':email', $this->email);
        $excluir -> bindValue(':senha', $this->senha);
        $excluir -> execute();
        $result = $excluir -> fetchAll();
        $excluir -> closeCursor();
        if($result<1){
            echo 'Usuário não existente';
        }
        else{
            $excluir = $conexao -> prepare("DELETE FROM tb_pessoa where email = :email and senha = :senha");
            $excluir -> bindParam(':email', $this->email);
            $excluir -> bindParam(':senha', $this->senha);
            $excluir -> execute();
            $excluir -> closeCursor();
        }
        }
        catch(PDOException $e){
            echo $e;
        }
    }
}
?>