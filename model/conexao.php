<?php 
class Conexao{
    private $pdo;

    public function getConexao(){
        $username="root";
        // $password="root";
        try{
            if(is_null($this->pdo)){    
            $this->pdo = new PDO('mysql:host = localhost; dbname=bd_conscientiza', $username, /*$password*/);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }     
        return $this->pdo;   
        }
        catch(PDOException $e){
            echo $e;
        }
    }
}
?>