<?php
include('conexao.php');
class QtLikes extends conexao{
    protected $id;

    public function __construct($id){
        $this->id = $id;
    }
    
    public function getQtLikePub(){
        $conexao = $this->getConexao();
        $qtlike = $conexao ->prepare("select qt_positivo from tb_publicacao where id=:id");
        $qtlike -> bindValue(':id', $this->id);
        $qtlike -> execute();
        $this->qtlike = $qtlike;
        return $this->qtlike;
        $qtlike -> closeCursor();
    }

    public function getQtDislikePub(){
        $conexao = $this->getConexao();
        $qtdislike = $conexao ->prepare("select qt_negativo from tb_publicacao where id=:id");
        $qtdislike -> bindValue(':id', $this->id);
        $qtdislike -> execute();
        $this->qtdislike = $qtdislike;
        return $this->qtdislike;
        $qtdislike -> closeCursor();
    }
    
    public function getQtLikeRec(){
        $conexao = $this->getConexao();
        $qtlike = $conexao ->prepare("select qt_positivo from tb_reclamacao where id=:id");
        $qtlike -> bindValue(':id', $this->id);
        $qtlike -> execute();
        $this->qtlike = $qtlike;
        return $this->qtlike;
        $qtlike -> closeCursor();
    }

    public function getQtDislikeRec(){
        $conexao = $this->getConexao();
        $qtdislike = $conexao ->prepare("select qt_negativo from tb_publicacao where id=:id");
        $qtdislike -> bindValue(':id', $this->id);
        $qtdislike -> execute();
        $this->qtdislike = $qtdislike;
        return $this->qtdislike;
        $qtdislike -> closeCursor();
    }

}
?>