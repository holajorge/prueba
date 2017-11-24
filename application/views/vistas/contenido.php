<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title></title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/materialize.min.css'); ?>" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
</head>

<body>

  <nav class="blue darken-4">
    <div class="row">
      <div class="nav-wrapper">

        <a href="#" class="brand-logo"> 
          <img style="padding-top:5%;" src="<?php echo base_url(); ?>assets/img/logomenu.png" alt="logo" class="responsive-img hide-on-small-only hide-on-med-only  hide-on-med-and-down">
          <img style="padding-top:10%;" src="<?php echo base_url(); ?>assets/img/logomenu2.png" alt="logo" class="responsive-img hide-on-large-only ">
        </a>
        
        <ul id="nav-mobile" class="float-center hide-on-med-and-down">
          <li><a href="">Inicio</a></li>
          <li><a href="<?php echo base_url(); ?>sitio/sitios_recreativos"">Sitios recrativos</a></li>
          <li><a href="<?php echo base_url(); ?>sitio/sitios_emblematicos">Sitios emblemáticos</a></li>
          <li><a href="<?php echo base_url(); ?>sitio/gastronomia"">Gastronomía</a></li>
          <li><a href="">Acerca de</a></li>
        </ul>
        

        <ul class="side-nav" id="mobile-menu">
          <li>
            <div class="user-view">
              <div class="background">
                <img src="<?php echo base_url(); ?>assets/img/slidermenu.png">
              </div>
              <br><br><br>
            </div>
          </li>

          <li><a href="#">Inicio</a></li>
          <li><div class="divider"></div></li>
          <li class="tab"><a href="#">Sitios Recreativos</a></li>
          <li class="tab"><a href="#">Gastronomia</a></li>
          <li class="tab"><a href="#">Sitios emblemáticos</a></li>
          <li class="tab"><a href="#">Acerca de</a></li>
        </ul>
        <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

      </div>
    </div>
  </nav>

  <div class="parallax-container">
    <div class="parallax" style="background-color: black;">
      <img src="<?php echo base_url(); ?>assets/img/inicio2.png" class="img-logo">
    </div>
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <!-- <h1 class="header center " style="color: #fff;">Lorem</h1> -->
        <div class="row center"> 
          <img src="<?php echo base_url('assets/img/ChetuGo-02.png'); ?>" alt="logo-banner" class="img-banner">
        </div>        
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="section">
        <h5><?php echo $nombre_seccion; ?></h5>
		<?php
			$base_url = base_url();
			if (count($datos)>0) {
				foreach ($datos as $sitio) {				
					echo "
						<div class='col s12 m4 l4 xl4'>
							<div class='card z-depth-3 hoverable'>
								<div class='card-image'>
									<img src='".$base_url."assets/uploads/".$sitio->Url."' style='height: 220px;'>
								</div>
								<div class='card-content'>
									<span class='card-title'>".$sitio->NombreSitio."</span>
									<p>".$sitio->Descripcion."</p>
								</div>
								<div class='card-action'>
					              <span style='padding: 10px;color: gray;'><i class='material-icons tiny'>visibility</i>".$sitio->vistas." </span>
					              <span style='padding: 10px;color: gray;'><i class='material-icons tiny'>question_answer</i> 1</span>
					              <a href='".$base_url."sitio/informacion?id=".$sitio->Id_Sitio."' class='right modal-trigger'>ver mas...</a>
					            </div>
							</div>
						</div>
					";
				}
			 } 
		?>

      </div>
    </div>
  </div>
  
  <footer class="page-footer blue darken-4">
    <div class="container-fluid" style="padding-bottom: 1%;">
      <div class="row" style="margin-bottom: 0px;">
        <div class="col l3 s12">
          <img src="<?php echo base_url(); ?>assets/img/ChetuGo-02.png" alt="logo" class="responsive-img responsive-img hide-on-small-only hide-on-med-only  hide-on-med-and-down" style="width: 60%; transform: translate3d(50px, 0px, 0px);">
        </div>
        <div class="col l9 s12">         
          <h6 class="grey-text text-lighten-4">Este trabajo fue realizado por alumnos de Ingeniería en Tecnologías de la Información y comunicaciones del Instituto Tecnológico de Chetumal y colaboradores de fotografía y video para la materia de Mercadotecnia en Internet.</h6>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/materialize.js'); ?>"></script>
  
  <script>
    $(document).ready(function(){    	
      $('.parallax').parallax();
      $(".button-collapse").sideNav();
      $('.modal').modal();
    });
    
    function myMap() {
      var mapProp= {
        center:new google.maps.LatLng(18.518362, -88.302492),
        zoom:17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: false,
      };
      
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz_n5_QFgYNuzzd4lXUIi8f2ZPpUbfsKw&callback=myMap"></script>

</body>
</html>