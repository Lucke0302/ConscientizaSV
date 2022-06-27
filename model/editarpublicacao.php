<?php 

include('conexao.php');

class UpdatePost extends Conexao{
    protected $id;
    protected $conteudo;

    public function __construct($id, $conteudo)
    {
        $this->id = $id;
        $this->conteudo = $conteudo;
    }   
    
    public function EditarReclamacao(){
        $conexao = $this->getConexao();
        $update = $conexao -> prepare("update tb_reclamacao set ds_conteudo = :conteudo where cd_reclamacao = :id ");
        $update -> bindValue(':id', $this->id);
        $update -> bindValue(':conteudo', $this->conteudo);
        $update -> execute();
        $update -> closeCursor();
        header('Location: ../../view/minhasreclamacoes/');
    }
}
?>