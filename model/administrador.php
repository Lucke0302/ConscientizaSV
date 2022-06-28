<?php
include_once('conexao.php');

class Administrador extends Conexao{

    public function getTipo(){
        echo $_SESSION['tipo'];
    }

    public function getPublicacoes(){
        $select = $this->getConexao()->prepare("select sfPubRecHoje() as pubrec, sfPublicacoesHoje() as pub, sfReclamacoesHoje() as rec");
        $select -> execute();
        $result = $select -> fetchAll();
        foreach($result as $row){
            echo "<div class='tudo'><label class='label' for='pubrec'>Total de posts</label><div id='pubrec' class='bolinha'>".$row['pubrec']."</div></div>
            <div class='tudo'><label class='label' for='pub'>Publicações</label><div id='pub' class='bolinha'>".$row['pub']."</div></div>
            <div class='tudo'><label class='label' for='rec'>Reclamações</label><div id='rec' class='bolinha'>".$row['rec']."</div></div>";
        }
    }
    public function getCadastros(){
        $cadastros = $this->getConexao()->prepare("select sfCadastrosHoje() as cadastro, sfCadastrosPessoasHoje() as cadastropes, sfCadastrosOrganizacoesHoje() as cadastroorg");
        $cadastros -> execute();
        $result = $cadastros -> fetchAll();
        foreach($result as $row){
            echo "<div class='tudo'><label class='label' for='cadastros'>Total de cadastros</label><div class='bolinha' id='cadastros'>".$row['cadastro']."</div></div>
            <div class='tudo'><label class='label' for='cadastropes'>Cadastros de pessoas</label><div class='bolinha' id='cadastropes'>".$row['cadastropes']."</div></div>
            <div class='tudo'><label class='label' for='cadastroorg'>Cadastros de organizações</label><div class='bolinha' id='cadastroorg'>".$row['cadastroorg']."</div></div>";
        }
    }
    public function Teste3(){
        $select = $this->getConexao()->prepare("select qt_logins as logins from logins_hoje where dt_logins = curdate()");
        $select -> execute();
        $result = $select -> fetchAll();
        foreach($result as $row){
            echo "<div class='bolinha'>".$row['logins']."</div>";
        }
    }
    public function getPessoas(){
        $conexao = $this -> getConexao();
        $select = $conexao ->prepare('select * from tb_pessoa');
        $select -> execute();
        $result = $select->fetchAll();
        echo "<div>
        <label for='nome'>Nome/e-mail:</label>
        <input type='search' id='nome'>
        </div>
        <table>
        <tr>
            <td>Nome</td>
            <td>E-mail</td> 
            <td>Tipo do Usuário</td>
        </tr>";
        foreach($result as $row){
            if($row['nm_tipo'] == "A"){
                $tipo = "Administrador";
            }
            else{             
                $tipo = "Usuário";
            }
            echo "<tr>
                    <td>".$row['ds_nome']."</td>
                    <td>".$row['ds_email']."</td>
                    <td id='tipo".$row['cd_pessoa']."'>".$tipo."</td>
                    <td> <a class='button' id='pes".$row['cd_pessoa']."'>Mudar tipo</a></td>
                  </tr>";   
        } 
        echo "</table>";
    }
    public function pesquisaPessoas($pesquisa){
        $conexao = $this -> getConexao();
        $select = $conexao ->prepare('select * from tb_pessoa where ds_nome like :pesquisa or ds_email like :pesquisa');
        $select -> bindValue(':pesquisa', $pesquisa);
        $select -> execute();
        $devolutiva = explode('%', $pesquisa);
        $result = $select->fetchAll();
        $quantidade = $select -> rowCount();
        if($quantidade > 0){
            echo "<div>
            <label for='nome'>Nome/e-mail:</label>
            <input type='search' id='nome'>
            </div>
            <table>
            <tr>
                <td>Nome</td>
                <td>E-mail</td> 
                <td>Tipo do Usuário</td>
            </tr>";
            foreach($result as $row){
                if($row['nm_tipo'] == "A"){
                    $tipo = "Administrador";
                }
                else{             
                    $tipo = "Usuário";
                }
                echo "<tr>
                        <td>".$row['ds_nome']."</td>
                        <td>".$row['ds_email']."</td>
                        <td id='tipo".$row['cd_pessoa']."'>".$tipo."</td>
                        <td> <a class='button' id='pes".$row['cd_pessoa']."'>Mudar tipo</a></td>
                    </tr>";   
            } 
            echo "</table>";
        }
        else{
            echo "Não há resultados para '".$devolutiva[0]."'";
        }
    }
    public function mudarTipo($id){
        $select = $this->getConexao()->prepare("select nm_tipo from tb_pessoa where cd_pessoa = :id");
        $select -> bindValue(':id', $id);
        $select -> execute();
        $result = $select -> fetchAll();
        foreach($result as $row){
            if($row['nm_tipo'] == 'U'){
                $tipo = 'A';
                $msg = "Administrador";
            }
            else{
                $tipo = 'U';
                $msg = "Usuário";
            }
            $update = $this->getConexao()->prepare("update tb_pessoa set nm_tipo = :tipo where cd_pessoa = :id");
            $update -> bindValue(':tipo', $tipo);
            $update -> bindValue(':id', $id);
            $update -> execute();
            echo $msg;
        }
    }
    public function getRanking(){
        $select = $this->getConexao()->prepare("select * from tb_vereadores order by qt_pontos desc"); 
        $select -> execute();
        $dados = $select -> fetchAll();
        echo "<table>
        <tr>
              <td id='h1'>Vereadores</td>
              <td id='h1'>Pontuação</td>
        </tr>      ";
        foreach($dados as $row){
            echo "<tr><td class='nome'>".$row['ds_nome'] . "</td><td class='pontos'><div class='button' id='menos".$row['cd_vereador']."'>- </div><div class='ponto' id='pontos".$row['cd_vereador']."'>" . $row['qt_pontos'] . "</div><div class='button' id='mais".$row['cd_vereador']."'> +</div></td></tr>"; 
        }
    }
    public function updatePontos($id, $acao){   
        $select1 = $this->getConexao()->prepare("select qt_pontos from tb_vereadores where cd_vereador = :id");
        $select1 -> bindParam(':id', $id);
        $select1 -> execute();
        $quant1 = $select1 -> fetch(); 
        if($quant1['qt_pontos'] == 0){
            $valido = false; 
        }    
        else{
            $valido = true;
        }
        if($acao == "+"){
            $update = $this->getConexao()->prepare("update tb_vereadores set qt_pontos = qt_pontos + 1 where cd_vereador = :id");
            $update -> bindParam(':id', $id);
            $update -> execute();
        }
        else if($acao == "-" && $valido == true){            
            $update = $this->getConexao()->prepare("update tb_vereadores set qt_pontos = qt_pontos - 1 where cd_vereador = :id");
            $update -> bindParam(':id', $id);
            $update -> execute();
        }
        else{            
        }
        $select = $this->getConexao()->prepare("select qt_pontos from tb_vereadores where cd_vereador = :id");
        $select -> bindParam(':id', $id);
        $select -> execute();
        $quant = $select -> fetch();
        echo $quant['qt_pontos'];
    }
}