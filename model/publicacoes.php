<?php
require_once('conexao.php');
class Publicacoes extends Conexao{
    public function getAllPublis(){
        $select = $this->getConexao()->prepare("select PUB.cd_publicacao, PUB.qt_positivo, PUB.ds_conteudo, ORG.ds_nome from tb_publicacao as PUB join tb_organizacao as ORG on PUB.cd_organizacao = ORG.cd_organizacao order by cd_publicacao desc");
        $select -> execute();
        $quantidade = $select->rowCount();
        if($quantidade < 1){
            echo "<p id='erro'> Ainda não há nenhuma publicação </p>";
        }
        else{
            $publicacoes = $select->fetchAll();
            echo "<section id='geral'><section id='publicacoes'>";
            foreach($publicacoes as $row){
                echo "<div class='card' class='card1'>
                    <p class='h1'>".$row['ds_nome']."</p>
                    <p class='p1'>".$row['ds_conteudo']."</p>
                    <div class='like' id='rec".$row['cd_publicacao']."'>
                    <svg xmlns='http://www.w3.org/2000/svg' id='likes' width='16' height='16' fill='currentColor' class='bi bi-star likes' viewBox='0 0 16 16'>
                        <path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'/>
                    </svg>
                    <label id='quant'>" .$row['qt_positivo']."</label>
                </div>
                </div>";
            } 
            echo "</section></section>";
        }
    }
    public function getAllRecs(){
        $select = $this->getConexao()->prepare("select REC.cd_reclamacao, REC.qt_positivo, REC.ds_conteudo, PES.ds_nome from tb_reclamacao as REC join tb_pessoa as PES on REC.cd_pessoa = PES.cd_pessoa order by cd_reclamacao desc");
        $select -> execute();
        $quantidade = $select->rowCount();
        if($quantidade < 1){
            echo "<p id='erro'> Ainda não há nenhuma publicação </p>";
        }
        else{
            $publicacoes = $select->fetchAll();
            echo "<section id='geral'><section id='publicacoes'>";
            foreach($publicacoes as $row){
                $select1 = $this->getConexao()->prepare("select * from pessoa_like_reclamacao where cd_pessoa = :iduser and cd_reclamacao = :idrec");
                $select1 -> bindValue(':iduser', $_SESSION['id']);
                $select1 -> bindValue(':idrec', $row['cd_reclamacao']);
                $select1 -> execute();
                $cont = $select1 -> rowCount();
                $select1 -> closeCursor();
                if($cont == 0){
                    echo "<div class='card' class='card1'>
                    <p class='h1'>".$row['ds_nome']."</p>
                    <p class='p1'>".$row['ds_conteudo']."</p>
                    <div class='like' id='rec".$row['cd_reclamacao']."'>
                    <svg xmlns='http://www.w3.org/2000/svg' id='likes".$row['cd_reclamacao']."' width='16' height='16' fill='currentColor' class='bi bi-star likes' viewBox='0 0 16 16'>
                        <path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'/>
                    </svg>
                    <label id='quant".$row['cd_reclamacao']."'>" .$row['qt_positivo']."</label>
                    </div>
                    </div>";
                }
                else{
                    echo "<div class='card' class='card1'>
                    <p class='h1'>".$row['ds_nome']."</p>
                    <p class='p1'>".$row['ds_conteudo']."</p>
                    <div class='like' id='rec".$row['cd_reclamacao']."'>
                    <svg xmlns='http://www.w3.org/2000/svg' id='likes".$row['cd_reclamacao']."' width='16' height='16' fill='currentColor' class='bi bi-star likes ativo' viewBox='0 0 16 16'>
                        <path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'/>
                    </svg>
                    <label id='quant".$row['cd_reclamacao']."'>" .$row['qt_positivo']."</label>
                    </div>
                    </div>";
                }
            } 
            echo "</section></section>";
        }
    }
    public function Pesquisa($pesquisa){
        $select= $this->getConexao()->prepare("select PUB.cd_publicacao, PUB.qt_positivo, PUB.ds_conteudo, ORG.ds_nome from tb_publicacao as PUB join tb_organizacao as ORG on PUB.cd_organizacao = ORG.cd_organizacao where PUB.ds_conteudo like :pesquisa order by PUB.cd_publicacao desc");
        $select->bindParam(':pesquisa', $pesquisa);
        $select->execute();
        $linhas = $select->rowCount();
        $conteudo = $select->fetchAll();
        $devolutiva = explode('%', $pesquisa);
        if($linhas > 0){
            foreach($conteudo as $row){
                echo "<div class='card' class='card1'>
                <p class='h1'>".$row['ds_nome']."</p>
                <p class='p1'>".$row['ds_conteudo']."</p>
                <div class='like' id='rec".$row['cd_publicacao']."'>
                <svg xmlns='http://www.w3.org/2000/svg' id='likes' width='16' height='16' fill='currentColor' class='bi bi-star likes' viewBox='0 0 16 16'>
                    <path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'/>
                </svg><label id='quant".$row['cd_publicacao']."'>" .$row['qt_positivo']."</label>
            </div>
            </div>";
            } 
        } 
        else{
            echo "Não foi encontrado nenhum resultado para '".$devolutiva[1]."'.";
        }
    }
    public function PesquisaRec($pesquisa){
        error_reporting(0);
        $select= $this->getConexao()->prepare("select REC.cd_reclamacao, REC.qt_positivo, REC.ds_conteudo, PES.ds_nome from tb_reclamacao as REC join tb_pessoa as PES on PES.cd_pessoa = REC.cd_pessoa where REC.ds_conteudo like :pesquisa order by REC.cd_reclamacao desc");
        $select->bindParam(':pesquisa', $pesquisa);
        $select->execute();
        $linhas = $select->rowCount();
        $conteudo = $select->fetchAll();
        $devolutiva = explode('%', $pesquisa);
        if($linhas > 0){
            foreach($conteudo as $row){
                $select1 = $this->getConexao()->prepare("select * from pessoa_like_reclamacao where cd_pessoa = :iduser and cd_reclamacao = :idrec");
                $select1 -> bindValue(':iduser', $_SESSION['id']);
                $select1 -> bindValue(':idrec', $row['cd_reclamacao']);
                $select1 -> execute();
                $cont = $select1 -> rowCount();
                $select1 -> closeCursor();
                if($cont == 0){
                    echo "<div class='card' class='card1'>
                    <p class='h1'>".$row['ds_nome']."</p>
                    <p class='p1'>".$row['ds_conteudo']."</p>
                    <div class='like' id='rec".$row['cd_reclamacao']."'>
                    <svg xmlns='http://www.w3.org/2000/svg' id='likes".$row['cd_reclamacao']."' width='16' height='16' fill='currentColor' class='bi bi-star likes' viewBox='0 0 16 16'>
                        <path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'/>
                    </svg>
                    <label id='quant".$row['cd_reclamacao']."'>" .$row['qt_positivo']."</label>
                    </div>
                    </div>";
                }
                else{
                    echo "<div class='card' class='card1'>
                    <p class='h1'>".$row['ds_nome']."</p>
                    <p class='p1'>".$row['ds_conteudo']."</p>
                    <div class='like' id='rec".$row['cd_reclamacao']."'>
                    <svg xmlns='http://www.w3.org/2000/svg' id='likes".$row['cd_reclamacao']."' width='16' height='16' fill='currentColor' class='bi bi-star likes ativo' viewBox='0 0 16 16'>
                        <path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'/>
                    </svg>
                    <label id='quant".$row['cd_reclamacao']."'>" .$row['qt_positivo']."</label>
                    </div>
                    </div>";
                }
            } 
        } 
        else{
            echo "Não foi encontrado nenhum resultado para '".$devolutiva[1]."'.";
        }
    }
    public function MinhasReclamacoes(){
        $select= $this->getConexao()->prepare("select * from tb_reclamacao where cd_pessoa = :id order by cd_reclamacao desc");
        $select->bindParam(':id', $_SESSION['id']);
        $select->execute();
        $linhas = $select->rowCount();
        $conteudo = $select->fetchAll();
        if($linhas > 0){
            foreach($conteudo as $row){
                    echo "<div id='div".$row['cd_reclamacao']."' class='card' class='card1'>
                    <p class='h1'>".$row['ds_nome']."</p>
                    <p class='p1' id='p".$row['cd_reclamacao']."'>".$row['ds_conteudo']."</p>
                    <div class='like' id='rec".$row['cd_reclamacao']."'>
                    <svg xmlns='http://www.w3.org/2000/svg' id='likes".$row['cd_reclamacao']."' width='16' height='16' fill='currentColor' class='bi bi-star likes' viewBox='0 0 16 16'>
                        <path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'/>
                    </svg>
                    <label id='quant".$row['cd_reclamacao']."'>" .$row['qt_positivo']."</label>
                    <a class='editar' id='rec".$row['cd_reclamacao']."'>Editar</a>
                    </div>
                    </div>";
                }
        } 
        else{
            echo "Você ainda não fez nenhuma reclamação.";
        }
    }
}