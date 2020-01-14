<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Kiddos - Free Bootstrap 4 Template by Colorlib</title>
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
  
  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread"> Contato</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contato <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Endereço</h3>
	            <p>Rua Ricardo Fogaroli, 440 Vila S Paulo, 19280-000 Teodoro Sampaio, Sao Paulo, Brazil</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Telefone</h3>
	            <p><a href="tel://551832823339">+55 18 3282-3339</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Email </h3>
	            <p><a href="mailto:info@yoursite.com">Colegionovomilenium@hot.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">novomilenium.com.br</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
		
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
       <div class="container">
	 <div class="row d-flex align-items-stretch no-gutters">
	   <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
               <form action="enviar-email.php" method="POST">
              <div class="form-group">
                  <input type="text" class="form-control" name="nome" placeholder="Nome">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" name="assunto" placeholder="Assunto">
              </div>
              <div class="form-group">
                  <textarea  id="" cols="30" rows="7" class="form-control" name="mensagem" placeholder="Mensagem"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar Mensagem" class="btn btn-primary py-3 px-5">
              </div>
            </form>
	    </div>
	     <div class="col-md-6 d-flex align-items-stretch">
	     <div id="map"></div>
	  </div>
	</div>
       </div>
    </section>
<?php 
    require 'Themes/templates/footer.php'; 