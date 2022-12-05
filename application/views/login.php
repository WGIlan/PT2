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
  <meta name="twitter:title" content="Login">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png-96x96.png" type="image/x-icon">
  <meta name="description" content="pagina de login e cadastro.">
  
  
  <title>Login</title>
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/dropdown/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/socicon/css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url('/');?>assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900&display=swap"></noscript>
  <link rel="preload" as="style" href="<?php echo base_url('/');?>assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="<?php echo base_url('/');?>assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu3 cid-sFAA5oUu2Y" once="menu" id="menu3-0">
    
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
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-white display-7" href="#top" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Home&nbsp;</a><div class="dropdown-menu" aria-labelledby="dropdown-452"><a class="dropdown-item text-white text-primary display-7" href="<?php echo base_url('home/login');?>">Login</a></div></li>
                    <li class="nav-item"><a class="nav-link link text-white display-7" href="index.html#content4-5">Recursos</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-7" href="#content4-6">Produtos</a>
                    </li><li class="nav-item"><a class="nav-link link text-white display-7" href="#features16-9">Sobre</a></li>
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

<section data-bs-version="5.1" class="form8 cid-toThAJXUsM" id="form8-3">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-1"><strong>Login</strong></h3>
            
        </div>
         <?php
			
			$error_msg = $this->session->flashdata('error_msg'); 
        	if(!empty($error_msg)){
			?>
            <div class="row">
            	<div class="col-md-12">
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4>	<i class="icon fa fa-info"></i> Problem!</h4>
                        <?php echo $error_msg; ?>
                    </div>
                </div>
            </div>
            <?php
			}
			?>     
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form name="login_form" id="login_form" method="post" action="<?php echo base_url('login');?>"  class="mbr-form form-with-styler mx-auto" data-form-title="Form Name">
                    <div class="dragArea row">
                        <div class="col-lg-4 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                <input type="text" name="userName" placeholder="Nome" data-form-field="name" class="form-control" id="userName">
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 form-group mb-3" data-for="email">
             <input type="password" name="userPassword" placeholder="Senha" data-form-field="email" class="form-control"          id="userPassword">
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 mbr-section-btn align-center">
                        <button type="button" onClick="checkLogin();" class="btn btn-primary display-4">Logar</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form7 cid-toThqf24Al" id="form7-2">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Ou</strong></h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-1"><strong>Cadastro</strong></h4>
        </div>
        <?php
			
			$success_msg = $this->session->flashdata('success_msg'); 
        	if(!empty($success_msg)){
			?>
            <div class="row">
            	<div class="col-md-12">
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4>	<i class="icon fa fa-check"></i> Success!</h4>
                        <?php echo $success_msg; ?>
                    </div>
                </div>
            </div>
            <?php
			}
			?>     
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form method="post" id="add_data" name="add_data" action="<?php echo base_url('login/create');?>" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name">
               
                    <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">Use Dados que Possui Acesso</p>
                
                    
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="user_name" id="user_name" placeholder="Nome" data-form-field="name" class="form-control">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                    <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" id="email">
                        </div>
                        <div data-for="phone" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                <input type="password" name="password" placeholder="Senha" data-form-field="phone" class="form-control" id="password">
                        </div>
                        <div class="col-auto mbr-section-btn align-center">
                        <button type="button" onClick="checkValidation();" class="btn btn-primary display-4">Sign Up</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer3 cid-sFAOjz8nX7" once="footers" id="footer3-1">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7"><a href="#top" class="text-white">Home</a></li><li class="foot-menu-item mbr-fonts-style display-7">R<a href="#content4-5" class="text-white text-primary">ecursos</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="#content4-6" class="text-white">Produtos</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="#features16-9" class="text-white">Sobre</a></li><li class="foot-menu-item mbr-fonts-style display-7"><a href="#contacts3-c" class="text-white text-primary">Contatos</a></li></ul>
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
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/2902085" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7">Designed with &#8204;</p><a style="z-index:1" href="https://mobirise.com"> Website Building Software</a></section>
<script src="<?php echo base_url('/');?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>  
<script src="<?php echo base_url('/');?>assets/smoothscroll/smooth-scroll.js"></script>  
<script src="<?php echo base_url('/');?>assets/ytplayer/index.js"></script> 
 <script src="<?php echo base_url('/');?>assets/dropdown/js/navbar-dropdown.js"></script>  
 <script src="<?php echo base_url('/');?>assets/theme/js/script.js"></script>  
 <script src="<?php echo base_url('/');?>assets/formoid/formoid.min.js"></script>  
  
 <script>
 function checkValidation(){
 var user_name = document.getElementById('user_name').value;
	if(user_name==""){
		alert("This field is required!!!");
		document.getElementById('user_name').focus();
		return false;
		}
 var email = document.getElementById('email').value;
	if(email==""){
		alert("This field is required!!!");
		document.getElementById('email').focus();
		return false;
		}
 var password = document.getElementById('password').value;
	if(password==""){
		alert("This field is required!!!");
		document.getElementById('password').focus();
		return false;
		}
	document.forms['add_data'].submit();
	 }
	 function checkLogin(){
		// alert("HERE");
 var userName = document.getElementById('userName').value;
	if(userName==""){
		alert("This field is required!!!");
		document.getElementById('userName').focus();
		return false;
		}
 var userPassword = document.getElementById('userPassword').value;
	if(userPassword==""){
		alert("This field is required!!!");
		document.getElementById('userPassword').focus();
		return false;
		}
	document.forms['login_form'].submit();
	 }
 </script> 
</body>
</html>