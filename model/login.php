<?php 
include("conexao.php");
class Login extends Conexao{
    
    protected $email;
    protected $senha;

    public function __construct($email, $senha)
    {
        session_start();
        $this->email = $email;
        $this->senha = $senha;
    }

    public function VerificarEmail(){
        $select = $this->getConexao() -> prepare("SELECT * FROM tb_organizacao where ds_email = :email");
        $select -> bindValue(':email', $this->email);
        $select -> execute();
        $valido = $select -> rowCount();
        if($valido < 1){
            $select->closeCursor();
            $select=$this->getConexao()->prepare("SELECT * FROM tb_pessoa where ds_email = :email");
            $select -> bindValue(':email', $this->email);
            $select -> execute();
            $valido = $select -> rowCount();
            $email = $select -> fetchAll();
            if($valido < 1){
                echo "false";
                $_SESSION['Logado'] = false;
            }
            else{
                foreach($email as $row){
                    $senha = $row['ds_senha'];
                    if(password_verify($this->senha, $senha)){
                        $_SESSION['Logado'] = true;
                    }
                    else{
                        $_SESSION['Logado'] = false;
                        echo "false";
                    }
                }
            }
        }
        else{
            $email = $select -> fetchAll();
            foreach($email as $row){
                $senha = $row['ds_senha'];
                if(password_verify($this->senha,  $senha)){
                    $_SESSION['Logado'] = true;       
                }
                else{
                    echo 'false';
                    $_SESSION['Logado'] = false;
                }
            }
        }
    }  

    public function getIdPessoa(){
        if($_SESSION['Logado'] == true){
            $select = $this->getConexao() -> prepare("select cd_organizacao, nm_tipo from tb_organizacao where ds_email = :email");
            $select -> bindValue(':email', $this->email);
            $select -> execute();
            $qtlinhas = $select->rowCount();
            if($qtlinhas < 1){
                $select -> closeCursor();
                $select = $this->getConexao()->prepare("select cd_pessoa, nm_tipo from tb_pessoa where ds_email = :email");
                $select -> bindValue(':email', $this->email);
                $select -> execute();
                $qtlinhas = $select->rowCount();
                if($qtlinhas < 1){
                }
                else{
                    $dados=$select->fetchAll();
                    foreach($dados as $id){
                        $_SESSION['id'] = $id['cd_pessoa'];
                        $_SESSION['tipo'] = $id['nm_tipo'];
                        header('location: ../../view/homepage/');
                    }
                }
            }
            else{
                $dados = $select->fetchAll();
                foreach($dados as $id){
                    $_SESSION['id'] = $id['cd_organizacao'];
                    $_SESSION['tipo'] = $id['mn_tipo'];
                    header('location: ../../view/homepage/');
                }
            } 
        }    
    }
}
?>