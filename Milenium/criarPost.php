<?php
include_once './Conexao.php';
//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$enviar = filter_input(INPUT_POST, 'enviar', FILTER_SANITIZE_STRING);
if ($enviar) {
    //Receber os dados do formulário
    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $descricao_topo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $descricao = $_POST["descricao"];
    $imagem_1 = $_FILES['imagem_1']['name'];
    $imagem_2 = $_FILES['imagem_2']['name'];
    //var_dump($_FILES['imagem']);
    //Inserir no BD
    $result_img = "INSERT INTO blog (titulo, descricao_topo, descricao, imagem_1, imagem_2) VALUES (:titulo, :descricao_topo,:descricao, :imagem_1, :imagem_2)";
    $insert_msg = $conn->prepare($result_img);
    $insert_msg->bindParam(':titulo', $titulo);
    $insert_msg->bindParam(':descricao_topo', $descricao_topo);
    $insert_msg->bindParam(':descricao', $descricao);
    $insert_msg->bindParam(':imagem_1', $imagem_1);
    $insert_msg->bindParam(':imagem_2', $imagem_2);

    //Verificar se os dados foram inseridos com sucesso
    if ($insert_msg->execute()) {
        //Recuperar último ID inserido no banco de dados
        $ultimo_id = $conn->lastInsertId();

        //Diretório onde o arquivo vai ser salvo
        $diretorio = 'imagens/' . $ultimo_id.'/';

        //Criar a pasta de foto 
        mkdir($diretorio, 0755);
        
        if(move_uploaded_file($_FILES['imagem_1']['tmp_name'], $diretorio.$imagem_1) and move_uploaded_file($_FILES['imagem_2']['tmp_name'], $diretorio.$imagem_2)){
            $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload da imagem realizado com sucesso</p>";
            header("Location: blog.php");
        }else{
            $_SESSION['msg'] = "<p><span style='color:green;'>Dados salvo com sucesso. </span><span style='color:red;'>Erro ao realizar o upload da imagem</span></p>";
            header("Location: index.php");
        }        
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
        header("Location: index.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
    
}

#Paginate
$limite = 7;
$pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;
$inicio = ($pg * $limite) - $limite;

$post;
$sql = "SELECT * FROM blog ORDER BY id DESC LIMIT  ".$inicio.", ". $limite;
$result = $conn->prepare($sql);
$result->execute();
#$result->fetch(PDO::FETCH_ASSOC);


$sql_Total = "SELECT * FROM blog";
$query_Total = $conn->prepare($sql_Total);
$query_Total->execute();
$query_result = $query_Total->fetchAll(PDO::FETCH_ASSOC);
$query_count =  $query_Total->rowCount(PDO::FETCH_ASSOC);
$qtdPag = ceil($query_count/$limite);

#Show


