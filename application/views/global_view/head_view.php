<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Titulo</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/materialize.css'); ?>" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">

  <link href="<?php echo base_url('assets/css/css_video.css'); ?>" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_url('assets/css/style-parallax.css'); ?>" type="text/css" rel="stylesheet"/>

</head>

<body>
	<div class="navbar-fixed">
		<nav class="blue darken-4">
		    <div class="container-fluid">
		    	<div class="row">
				    <div class="nav-wrapper">

				        <a href="<?php echo base_url(); ?>" class="brand-logo"> 
				          <img style="padding-top:5%;" src="<?php echo base_url(); ?>assets/img/logomenu.png" alt="logo" class="responsive-img hide-on-small-only hide-on-med-only hide-on-med-and-down">
				          <img style="padding-top:10%;" src="<?php echo base_url(); ?>assets/img/logomenu2.png" alt="logo" class="responsive-img right hide-on-large-only">
				        </a>
				        	        
				        <ul id="nav-mobile" class="right hide-on-med-and-down">
				          <li><a href="<?php echo base_url(); ?>">Inicio</a></li>
				          <li><a href="">Sitios recretivos</a></li>
				          <li><a href="">Sitios emblemáticos</a></li> 
				          <li><a href="">Gastronomía</a></li>
				          <li><a href="">Acerca de</a></li>
				        </ul>
				        
				      	<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
				    </div>
			    </div>
		    </div>
		</nav>
	</div>

	<ul class="side-nav" id="mobile-menu">
	    <li>
	        <div class="user-view">
	          <div class="background">
	            <img src="<?php echo base_url(); ?>assets/img/slidermenu.png">
	          </div>
	          <br><br><br>
	        </div>
	    </li>

	    <li><a href="<?php echo base_url(); ?>">Inicio</a></li>
	    <li><div class="divider"></div></li>
	    <li class="tab"><a href="">Sitios recreativos</a></li>
	    <li class="tab"><a href="">Sitios emblemáticos</a></li>
	    <li class="tab"><a href="">Gastronomia</a></li>
	    <li class="tab"><a href="">Acerca de</a></li>
	</ul>


	
