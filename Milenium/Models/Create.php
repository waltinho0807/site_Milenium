<?php


class Create {
    
    private $titulo;
    private $descricao_topo;
    private $descricao;
    private $imagem_1;
    private $imagem_2;
    
    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao_topo() {
        return $this->descricao_topo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getImagem_1() {
        return $this->imagem_1;
    }

    function getImagem_2() {
        return $this->imagem_2;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao_topo($descricao_topo) {
        $this->descricao_topo = $descricao_topo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setImagem_1($imagem_1) {
        $this->imagem_1 = $imagem_1;
    }

    function setImagem_2($imagem_2) {
        $this->imagem_2 = $imagem_2;
    }

    function inserir(){
        session_start();
        include_once './Conexao.php';
        
        $this->getTitulo() = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
        $this->getDescricao_topo() = filter_input(INPUT_POST, 'descricao_topo', FILTER_SANITIZE_STRING);
        $this->getDescricao() = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
        $this->getImagem_1() = $_FILES['imagem_1']['name'];
        $this->getImagem_2() = $_FILES['imagem_2']['name'];
    
        $sql = "INSERT INTO blog (nome,descricao_topo,descricao,imagem_1,imagem_2) VALUES (:titulo, descricao_topo, descricao, :imagem_1,:imagem_2 )";
        $insert_msg = $conn->prepare($sql);
        $insert_msg->bindParam(':titulo', $this->getTitulo());
        $insert_msg->bindParam(':descricao_topo', $this->getDescricao_topo());
        $insert_msg->bindParam(':descricao', $this->getDescricao());
        $insert_msg->bindParam(':imagem_1', $this->getImagem_1());
        $insert_msg->bindParam(':imagem_2', $this->getImagem_2());
        
        if ($insert_msg->execute()) {
        //Recuperar último ID inserido no banco de dados
        $ultimo_id = $conn->lastInsertId();

        //Diretório onde o arquivo vai ser salvo
        $diretorio = 'imagens/' . $ultimo_id.'/';

        //Criar a pasta de foto 
        mkdir($diretorio, 0755);
      }
      if(move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$this->getImagem_1())){
            $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload da imagem realizado com sucesso</p>";
            header("Location: blog.php");
      }    
    }
}
