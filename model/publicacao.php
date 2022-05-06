<?php 
include('conexao.php');
class Publicacao extends Conexao{
    protected $id;
    protected $conteudo;
    protected $iduser;
    // protected $positivo;
    // protected $negativo;

    public function __construct($id, $conteudo, $org/*, $positivo, $negativo*/)
    {
        $this->id = $id;
        $this->conteudo = $conteudo;
        $this->org = $org;
        // $this->positivo = $positivo;
        // $this->negativo = $negativo;
    }

    public function setPublicacao(){
        $conexao = $this->getConexao();
        $publicacao = $conexao -> prepare("insert into tb_publicacao (cd_publicacao, ds_conteudo, cd_organizacao) values (default, :conteudo, :org)");
        $publicacao -> bindValue(':conteudo', $this->conteudo);
        $publicacao -> bindValue(':org', $this->org);
        $publicacao -> execute();
        $publicacao -> closeCursor();
        header('location: ../../view/comoajudar/');
    }

    public function setReclamacao(){
        $conexao = $this->getConexao();
        $publicacao = $conexao -> prepare("insert into tb_reclamacao (cd_publicacao, ds_conteudo, cd_organizacao, qt_positivo, qt_negativo) values (default, :conteudo, :org, default, default)");
        $publicacao -> bindValue(':conteudo', $this->conteudo);
        $publicacao -> bindValue(':org', $this->org);
        $publicacao -> execute();
        $publicacao -> closeCursor();
    }
}
?>