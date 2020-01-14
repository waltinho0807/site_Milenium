<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Colegio NM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  
  <?php 
    require 'Themes/templates/header.php';
    ?>
  
  <div class="container">
  <h1 class="mb-3">Criar Post</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
  <div class="container">
      <form  method="POST" action="criarPost.php" enctype="multipart/form-data">
            <div class="form-group mb-3">
            <label>Titulo:</label>
            <input type="text" name="titulo" placeholder="Titulo"><br><br>
            </div>
            
            <div class="form-group mb-3">
            <label>Descrição Topo:</label>
            <textarea class="form-control" id="descricao_topo" name="descricao_topo" rows="3" placeholder="Digite uma breve descrição " required></textarea>
            </div>
            
            <div class="form-group mb-3">
            <label> Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Digite uma breve descrição " required></textarea>
            </div>
            
            <div class="input-group mb-3">
            <label>Imagem</label>
            <input type="file" name="imagem_1"><br><br>
            </div>
            
             <div class="input-group mb-3">
            <label>Imagem</label>
            <input type="file" name="imagem_2"><br><br>
             </div>
            <input class="btn btn-primary" name="enviar" type="submit" value="Postar">
        </form>
      <br>
    </div>
  </div>
   <?php 
    require 'Themes/templates/footer.php'; 
