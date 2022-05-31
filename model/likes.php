<?php
include('conexao.php');
class Likes extends conexao{
    protected $iduser;
    protected $idrec;

    public function __construct($iduser, $idrec){
        $this->iduser=$iduser;
        $this->idrec=$idrec;
    }

    public function updateLikesRec(){
        $select = $this->getConexao()->prepare("select * from pessoa_like_reclamacao where cd_pessoa = :iduser and cd_reclamacao = :idrec");
        $select -> bindValue(':iduser', $this->iduser);
        $select -> bindValue(':idrec', $this->idrec);
        $select -> execute();
        $cont = $select->rowCount();
        if($cont == 0){
            $select -> closeCursor();
            $update = $this->getConexao()->prepare("update tb_reclamacao set qt_positivo = qt_positivo + 1 where cd_reclamacao = :idrec");
            $update -> bindValue(':idrec', $this->idrec);
            $update -> execute();
            $update -> closeCursor();
            $insert = $this->getConexao()->prepare("insert into pessoa_like_reclamacao (cd_pessoa, cd_reclamacao) values (:iduser, :idrec)");
            $insert -> bindValue(':iduser', $this->iduser);
            $insert -> bindValue(':idrec', $this->idrec);
            $insert -> execute();
            $insert -> closeCursor();
            $this->getLikes();
        }
        else{
            $select -> closeCursor();
            $update = $this->getConexao()->prepare("update tb_reclamacao set qt_positivo = qt_positivo - 1 where cd_reclamacao = :idrec");
            $update -> bindValue(':idrec', $this->idrec);
            $update -> execute();
            $update -> closeCursor();
            $insert = $this->getConexao()->prepare("delete from pessoa_like_reclamacao where cd_pessoa = :iduser and cd_reclamacao = :idrec");
            $insert -> bindValue(':iduser', $this->iduser);
            $insert -> bindValue(':idrec', $this->idrec);
            $insert -> execute();
            $insert -> closeCursor();
            $this->getLikes();
        }
    }
    public function getLikes(){
        $select = $this->getConexao()->prepare("select qt_positivo from tb_reclamacao where cd_reclamacao = :idrec");
        $select -> bindValue(':idrec', $this->idrec); 
        $select -> execute();
        $result = $select -> fetchAll();
        foreach($result as $row){
            echo $row['qt_positivo'];
        }
    }
}
?>