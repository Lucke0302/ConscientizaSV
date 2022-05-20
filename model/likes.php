<?php
include('conexao.php');
class QtLikes extends conexao{
    protected $iduser;
    protected $idrec;

    public function __construct($iduser, $idrec){
        $this->iduser=$iduser;
        $this->idrec=$idrec;
    }

    public function updateLikesRec(){
        $update = $this->getConexao()->prepare("update tb_reclamacao set qt_positivo = qt_positivo + 1 where cd_reclamacao = :id");
        $update -> bindValue(':id', $this->idrec);
        $update -> execute();
    }

}
?>