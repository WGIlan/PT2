<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.6.13, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.13, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Home">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png-96x96.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/socicon/css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap"></noscript>
  <link rel="preload" as="style" href="<?php echo base_url('/');?>assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="<?php echo base_url('/');?>assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu3 cid-sFAA5oUu2Y" once="menu" id="menu3-1">
    
    <nav class="navbar navbar-dropdown navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobiri.se">
                        <img src="<?php echo base_url('/');?>assets/images/logo.png-96x96.png" alt="Mobirise Website Builder" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white text-primary display-5" href="<?php echo base_url();?>">Box CupCake Shop</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-white display-7" href="#top" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Home&nbsp;</a><div class="dropdown-menu" aria-labelledby="dropdown-452"><a class="dropdown-item text-white text-primary display-7" href="<?php echo base_url('home/login'); ?>">Login</a></div></li>
                    <li class="nav-item"><a class="nav-link link text-white display-7" href="#content4-5">Recursos</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-7" href="#content4-6">Produtos</a>
                    </li>
                    <li class="nav-item"><a class="nav-link link text-white display-7" href="#features16-9">Sobre</a></li>
                    <?php if($this->session->has_userdata('is_logged_in') && $this->session->userdata('is_logged_in') === TRUE ){?>
                    <li class="nav-item"><a title="Click to LogOut" class="nav-link link text-white display-7" href="<?php echo base_url('home/logOut');?>">User:&nbsp;<?php echo $this->session->userdata('user_name');?></a></li> <?php }?>
                    
                    </ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://mobiri.se" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-google socicon"></span>
                    </a>
                    
                </div>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-info display-4" href="https://mobiri.se">Download</a></div>
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="header1 cid-sFCAOqBTxa" id="header1-i">

    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Box CupCake Shop</strong></h1>
                
                <p class="mbr-text mbr-fonts-style display-7"><strong><em>Iremos fazer sempre nosso melhor para agradar nossos clientes fornecendo os melhores CupCakes do Brasil.</em></strong></p>
                <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4" href="index.html#content4-6">Comprar Agora</a> <a class="btn btn-secondary display-4" href="index.html#features16-9">Saber Mais</a></div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content4 cid-sFADQxFnEn" id="content4-5">
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>Recursos da Loja</strong></h3>
                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-5"><em>Estaremos buscando mais forma de ajudar nossos clientes em breve.</em></h4>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features5 cid-sFACYYm0AQ" id="features6-3">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-lg-6">
                <div class="card-wrapper mbr-flex">
                    <div class="card-box align-left">
                        
                        <h5 class="card-title mbr-fonts-style align-left mb-3 display-5"><strong>Carrinho</strong></h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-4"><em>Assim o cliente poderá comprar vários produtos no mesmo pedido. Economizando no frete.</em></p>
                        <div class="mbr-section-btn"><a href="https://mobiri.se" class="btn btn-secondary display-4">Comprar Agora</a></div>
                    </div>
                    <div class="img-wrapper img1 align-center">
                        <span class="mbr-iconfont mobi-mbri-cart-full mobi-mbri"></span>
                    </div>
                </div>
            </div>

            <div class="card col-12 col-lg-6">
                <div class="card-wrapper mbr-flex">
                    <div class="card-box align-left">
                        
                        <h5 class="card-title mbr-fonts-style align-left mb-3 display-5"><strong>Envio Rápido</strong></h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-4"><em>Envio para toda capital de são paulo, com prazo máximo de 2 horas, em breve adicionaremos outras filliais no brasil todo.</em></p>
                        <div class="mbr-section-btn"><a href="https://mobiri.se" class="btn btn-secondary display-4">Comprar Agora</a></div>
                    </div>
                    <div class="img-wrapper img2 align-center">
                        <span class="mbr-iconfont mobi-mbri-globe-2 mobi-mbri"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content4 cid-sFADQQfNeA" id="content4-6">
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-1"><strong>Produtos</strong></h3>
                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-5"><em>Alguns de nossos produtos.</em></h4>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features8 cid-sFADMOwrhN" xmlns="http://www.w3.org/1999/html" id="features9-4">
    
    

    

    <div class="container">
        <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="image-wrapper">
                            <img src="<?php echo base_url('/');?>assets/images/cupcake-morango-554x554.jpeg" alt="Mobirise Website Builder">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md">
                                    <h6 class="card-title mbr-fonts-style display-2"><strong>CupCake de Morango</strong><br><strong><br></strong></h6>
                                    <p class="mbr-text mbr-fonts-style display-7"><em>Massa de baunilha assado com morangos frescos e cobertura de creme de morango.</em><br></p>
                                </div>
                                <div class="col-md-auto">
                                    <p class="price mbr-fonts-style display-2">&nbsp;R$ 19</p>
                                    <div class="mbr-section-btn"><a href="https://mobiri.se" class="btn btn-secondary display-4">Comprar Agora</a></div>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="image-wrapper">
                            <img src="<?php echo base_url('/');?>assets/images/images-12-554x554.jpg" alt="Mobirise Website Builder">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md">
                                    <h6 class="card-title mbr-fonts-style display-2"><strong>CupCake de Chocolate</strong><br><strong><br></strong></h6>
                                    <p class="mbr-text mbr-fonts-style display-7"><em>Massa de chocolate e cobertura de brigadeiro.</em></p>
                                </div>
                                <div class="col-md-auto">
                                    <p class="price mbr-fonts-style display-2">&nbsp;R$ 15</p>
                                    <div class="mbr-section-btn"><a href="https://mobiri.se" class="btn btn-secondary display-4">Comprar Agora</a></div>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="image-wrapper">
                            <img src="<?php echo base_url('/');?>assets/images/images-7-466x658.jpeg" alt="Mobirise Website Builder">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md">
                                    <h6 class="card-title mbr-fonts-style display-2"><strong>CupCake BlueBerry</strong><br><strong><br></strong></h6>
                                    <p class="mbr-text mbr-fonts-style display-7">Massa de chocolate, recheio de creme de blueberry e cobertura de brigadeiro branco.<br></p>
                                </div>
                                <div class="col-md-auto">
                                    <p class="price mbr-fonts-style display-2">&nbsp;R$ 20</p>
                                    <div class="mbr-section-btn"><a href="https://mobiri.se" class="btn btn-secondary display-4">Comprar Agora</a></div>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="features15 cid-sFANq99njx" id="features16-9">

    

    
    <div class="container">
        <div class="content-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg">
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style display-2"><strong>Sobre Nós</strong><br><strong><br></strong></h6>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4"><em>A BoxCupCakesShop produz cupcakes com amor e técnica, oferecendo os mais diversos e deliciosos produtos, visando criar momentos inesquecíveis, satisfazendo os clientes através de uma alimentação com excelente qualidade e atendimento.</em><br><br><br></p>
                        <div class="mbr-section-btn mt-3"><a class="btn btn-primary display-4" href="https://mobiri.se">Saber Mais</a></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="<?php echo base_url('/');?>assets/images/5af108d3445f84ee9fed9715f1b9ad88.jpg" alt="Mobirise Website Builder">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="clients2 cid-sFAOcdRzJX" id="clients2-b">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="img-wrapper">
                        <img src="<?php echo base_url('/');?>assets/images/negocio-de-aperto-de-mao-com-trabalho-em-equipe-24877.webp" alt="Mobirise Website Builder">
                    </div>
                    <div class="card-box align-center">
                        
                        <h5 class="card-title mbr-fonts-style mb-3 display-5"><strong>CupCakeSchool</strong></h5>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">Site com diversos cursos de cupcakes.
<br>Recomendo os amantes do sabor a conferir.</p>
                        <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-4" href="https://mobiri.se">Conhecer</a></div>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="img-wrapper">
                        <img src="<?php echo base_url('/');?>assets/images/negocio-de-aperto-de-mao-com-trabalho-em-equipe-24877.webp" alt="Mobirise Website Builder">
                    </div>

                    <div class="card-box align-center">
                        
                        <h5 class="card-title mbr-fonts-style mb-3 display-5"><strong>Atacado Doces Mix</strong></h5>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">Fornecedores de ingredientes, localizados na cidade  RS-Três Passos, recomendam para quem quer trabalhar na área.</p>
                        <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-4" href="https://mobiri.se">Conhecer</a></div>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="img-wrapper">
                        <img src="<?php echo base_url('/');?>assets/images/negocio-de-aperto-de-mao-com-trabalho-em-equipe-24877.webp" alt="Mobirise Website Builder">
                    </div>
                    <div class="card-box align-center">
                        
                        <h5 class="card-title mbr-fonts-style mb-3 display-5"><strong>Universo CupCake</strong></h5>
                        <p class="mbr-text mbr-fonts-style mb-4 display-4">Revendedores Cariocas, localizado na cidade de Niterói RJ, recomenda a todos que queiram experimentar nossos cupcakes. </p>
                        <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-4" href="https://mobiri.se">Conhecer</a></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content2 cid-sFAOw5Fdod" id="content2-e">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Promoções</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Próximas promoções que teremos.</h5>
        </div>
        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="<?php echo base_url('/');?>assets/images/3zh9ph7yupj6sskk-2000x1333.jpg" alt="Mobirise Website Builder" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Black Friday</strong></h5>
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7"><em>Maiores descontos do ano com até 90% em alguns produtos.</em><em><br></em><br><em><strong>DATA</strong>: 25/11/2022 até 26/11/2022.</em></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-primary display-4" target="_blank">Saber Mais &gt;</a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="<?php echo base_url('/');?>assets/images/christmas-sale-video-twig-light-shine-promo-design-template-840658be62a589c90dd93fb9eb73fcb2-screen.jpg" alt="Mobirise Website Builder" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Natal</strong></h5>
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">Descontos de até 25% em toda semana do natal.<br><br><em><strong>DATA: </strong>25/12/2022 até 29/12/2022.</em></p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-primary display-4" target="_blank">Saber Mais &gt;</a></div>
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="<?php echo base_url('/');?>assets/images/istockphoto-894068834-612x612.jpeg" alt="Mobirise Website Builder" title="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Ano Novo</strong></h5>
                        
                        <p class="mbr-text mbr-fonts-style mt-3 display-7"><em>Queima de estoque com descontos variados no último fim de semana.</em><br><br>DATA: 29/12/2022 até 31/12/2022.</p>
                    </div>
                    <div class="mbr-section-btn item-footer mt-2"><a href="" class="btn item-btn btn-primary display-4" target="_blank">Saber Mais&gt;</a></div>
                </div>
            </div>

        </div>
    </div>
</section>

<section data-bs-version="5.1" class="testimonials2 cid-sFAO03Bfrt" id="testimonials2-a">
    
    
    <div class="container">
        <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>Comentários de Clientes</strong><br><strong><br></strong></h3>
        <div class="row justify-content-center">
            <div class="card col-12 col-md-6">
                <p class="mbr-text mbr-fonts-style mb-4 display-7"><em>Cupcakes deliciosos, entrega rápida, além de ter uma aparência muito boa..</em><br><br> </p>
                <div class="d-flex mb-md-0 mb-4">
                    <div class="image-wrapper">
                        <img src="<?php echo base_url('/');?>assets/images/team1.jpg" alt="Mobirise Website Builder">
                    </div>
                    <div class="text-wrapper">
                        <p class="name mbr-fonts-style mb-1 display-4"><strong>Renan Rodrigues</strong></p>
                        <p class="position mbr-fonts-style display-4">
                            <strong>Cliente</strong></p>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6">
                <p class="mbr-text mbr-fonts-style mb-4 display-7"><em>Muitas variedades de Cupcakes, massa fresca e no ponto ideal. As coberturas são lindas e também deliciosas.</em><em><br></em><br> </p>
                <div class="d-flex mb-md-0 mb-4">
                    <div class="image-wrapper">
                        <img src="<?php echo base_url('/');?>assets/images/team2.jpg" alt="Mobirise Website Builder">
                    </div>
                    <div class="text-wrapper">
                        <p class="name mbr-fonts-style mb-1 display-4"><strong>Vitória Lima<br>Cliente</strong>&nbsp;</p><p><strong>&nbsp;</strong><br></p><p></p>
                        <p class="position mbr-fonts-style display-4"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="gallery6 mbr-gallery cid-sFAQAQGsOD" id="gallery6-f">
    

    

    <div class="container-fluid">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"><strong>Galeria de Fotos.</strong></h3>
            
        </div>
        <div class="row mbr-gallery mt-4">
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#toUPk5TLBd-modal" data-bs-target="#toUPk5TLBd-modal">
                    <img class="w-100" src="<?php echo base_url('/');?>assets/images/918388-1900x1264.jpg" alt="Mobirise Website Builder" data-slide-to="0" data-bs-slide-to="0" data-target="#lb-toUPk5TLBd" data-bs-target="#lb-toUPk5TLBd">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#toUPk5TLBd-modal" data-bs-target="#toUPk5TLBd-modal">
                    <img class="w-100" src="<?php echo base_url('/');?>assets/images/999073-1600x1045.jpg" alt="Mobirise Website Builder" data-slide-to="1" data-bs-slide-to="1" data-target="#lb-toUPk5TLBd" data-bs-target="#lb-toUPk5TLBd">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#toUPk5TLBd-modal" data-bs-target="#toUPk5TLBd-modal">
                    <img class="w-100" src="<?php echo base_url('/');?>assets/images/images-9-596x447.jpg" alt="Mobirise Website Builder" data-slide-to="2" data-bs-slide-to="2" data-target="#lb-toUPk5TLBd" data-bs-target="#lb-toUPk5TLBd">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#toUPk5TLBd-modal" data-bs-target="#toUPk5TLBd-modal">
                    <img class="w-100" src="<?php echo base_url('/');?>assets/images/images-667x460.jpg" alt="Mobirise Website Builder" data-slide-to="3" data-bs-slide-to="3" data-target="#lb-toUPk5TLBd" data-bs-target="#lb-toUPk5TLBd">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="toUPk5TLBd-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="carousel slide" id="lb-toUPk5TLBd" data-interval="5000" data-bs-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo base_url('/');?>assets/images/918388-1900x1264.jpg" alt="Mobirise Website Builder">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('/');?>assets/images/999073-1600x1045.jpg" alt="Mobirise Website Builder">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('/');?>assets/images/images-9-596x447.jpg" alt="Mobirise Website Builder">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('/');?>assets/images/images-667x460.jpg" alt="Mobirise Website Builder">
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-slide-to="0" data-bs-slide-to="0" class="active" data-target="#lb-toUPk5TLBd" data-bs-target="#lb-toUPk5TLBd"></li>
                                <li data-slide-to="1" data-bs-slide-to="1" data-target="#lb-toUPk5TLBd" data-bs-target="#lb-toUPk5TLBd"></li>
                                <li data-slide-to="2" data-bs-slide-to="2" data-target="#lb-toUPk5TLBd" data-bs-target="#lb-toUPk5TLBd"></li>
                                <li data-slide-to="3" data-bs-slide-to="3" data-target="#lb-toUPk5TLBd" data-bs-target="#lb-toUPk5TLBd"></li>
                            </ol>
                            <a role="button" href="" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                            </a>
                            <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" data-bs-slide="prev" href="#lb-toUPk5TLBd">
                                <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next carousel-control" role="button" data-slide="next" data-bs-slide="next" href="#lb-toUPk5TLBd">
                                <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts3 map1 cid-sFAOgbarYq" id="contacts3-c">

    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Contatos</strong>
            </h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-phone mobi-mbri" style="color: rgb(5, 56, 107); fill: rgb(5, 56, 107);"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5"><strong>Celular</strong></h6>
                        <p class="mbr-text mbr-fonts-style display-7">4002 8922</p>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-letter mobi-mbri" style="color: rgb(5, 56, 107); fill: rgb(5, 56, 107);"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Email</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            BoxCupCakeShop<a href="mailto:info@site.com" class="text-primary">@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="map-wrapper col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDk89J4FSunMF33ruMVWJaJht_Ro0kvoXs&amp;q=Rua Fernando Ferrari - Vila Jockei Clube, São Vicente - São Paulo, Brasi" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-sFAOjz8nX7" once="footers" id="footer3-d">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7"><a href="#top" class="text-white">Home</a></li><li class="foot-menu-item mbr-fonts-style display-7">R<a href="index.html#content4-5" class="text-white text-primary">ecursos</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="index.html#content4-6" class="text-white">Produtos</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="index.html#features16-9" class="text-white">Sobre</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="index.html#contacts3-c" class="text-white text-primary">Contatos</a></li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" style="color: rgb(34, 165, 229); fill: rgb(34, 165, 229);"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(34, 165, 229); fill: rgb(34, 165, 229);"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon" style="color: rgb(34, 165, 229); fill: rgb(34, 165, 229);"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" style="color: rgb(34, 165, 229); fill: rgb(34, 165, 229);"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-googleplus socicon" style="color: rgb(34, 165, 229); fill: rgb(34, 165, 229);"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-behance socicon" style="color: rgb(34, 165, 229); fill: rgb(34, 165, 229);"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2022 BoxCupCakesShops. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/2902085" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7">Designed with &#8204;</p><a style="z-index:1" href="https://mobirise.com/html-builder.html">HTML Website Maker</a></section><script src="<?php echo base_url('/');?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="<?php echo base_url('/');?>assets/smoothscroll/smooth-scroll.js">
</script>  <script src="<?php echo base_url('/');?>assets/ytplayer/index.js"></script>  
<script src="<?php echo base_url('/');?>assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="<?php echo base_url('/');?>assets/theme/js/script.js"></script>  
  
  
</body>
</html>