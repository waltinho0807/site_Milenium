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
    include_once 'Themes/templates/header.php';
    ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/home/fundo10.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Nosso Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
                                    
<?php
include_once  './criarPost.php';
         
             while ($post = $result->fetch(PDO::FETCH_ASSOC) ){
                  ?>                         
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
                <a href="showBlog.php" class="block-20 d-flex align-items-end" style="background-image: url('imagens/<?=$post['id']?>/<?=$post['imagem_1']?>');">
								<div class="meta-date text-center p-2">
                  <span class="day"><?=$post['data']?></span>
                  
                </div>
              </a>
              <div class="text bg-white p-4">
                  <h3 class="heading"><a href="showBlog.php"><?= $post['titulo']?></a></h3>
                <p><?=$post['descricao_topo']?>.</p>
                <div class="d-flex align-items-center mt-4">
                    <p class="mb-0"><a href="showBlog.php?action=<?=$post['id']?>" class="btn btn-secondary">Saiba mais <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
             <?php }?>                          
          
          
        
        
        </div>
        <div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                
                <?php
                  include_once './criarPost.php';
                  $j = $pg -1;
                  $f = $pg +1;
                  echo "<li><a href='blog.php?pg=$j'><i class='ion-ios-arrow-back'></i></a></li>";
                  if($qtdPag > 1 && $pg <= $qtdPag){
                       for($i = 1; $i <= $qtdPag; $i++){
                           if($i == $pg){
                               echo "<li class='active'><a class='active'>".$i."</a></li>";
                           }else{
                               echo "<li><a href='blog.php?pg=$i'>".$i."</a></li>";
                           }
                       }
                  }
                  
                  echo "<li><a href='blog.php?pg=$f'><i class='ion-ios-arrow-forward'></i></a></li>";
                        ?>
                
              </ul>
            </div>
          </div>
        </div>
			</div>
		</section>

    <?php 
    require 'Themes/templates/footer.php';