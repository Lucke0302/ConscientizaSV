<?php 
include('conexao.php');
class Publicacao extends Conexao{
    protected $id;
    protected $conteudo;
    protected $iduser;
    // protected $positivo;
    // protected $negativo;

    public function __construct($id, $conteudo, $iduser/*, $positivo, $negativo*/)
    {
        $this->id = $id;
        $this->conteudo = $conteudo;
        $this->user = $iduser;
        // $this->positivo = $positivo;
        // $this->negativo = $negativo;
    }

    public function setPublicacao(){
        $conexao = $this->getConexao();
        $publicacao = $conexao -> prepare("insert into tb_publicacao (cd_publicacao, ds_conteudo, cd_organizacao) values (default, ?, ?)");
        $publicacao -> bindValue(1, $this->conteudo);
        $publicacao -> bindValue(2, $this->user);
        $publicacao -> execute();
        $publicacao -> closeCursor();
        header('location: ../../view/comoajudar/');
    }

    public function setReclamacao(){
        $conexao = $this->getConexao();
        $publicacao = $conexao -> prepare("insert into tb_reclamacao (cd_reclamacao, ds_conteudo, cd_pessoa) values (default, :conteudo, :user)");
        $publicacao -> bindValue(':conteudo', $this->conteudo);
        $publicacao -> bindValue(':user', $this->user);
        $publicacao -> execute();
        $publicacao -> closeCursor();
        header('location: ../../view/reclamacoes/');
    }
}
?>