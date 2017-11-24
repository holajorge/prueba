<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<meta property="fb:app_id" content="1845827735727428" />

  <title></title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/materialize.min.css'); ?>" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Barlow:300i,400,500" rel="stylesheet">

  <!-- Magnific Popup core CSS file -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">

</head>

<body>
<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11&appId=1845827735727428';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<nav class="blue darken-4">
	    <div class="container">
	    	<div class="row">
	      <div class="nav-wrapper">

	        <a href="<?php echo base_url(); ?>" class="brand-logo"> 
	          <img style="padding-top:5%;" src="<?php echo base_url(); ?>assets/img/logomenu.png" alt="logo" class="responsive-img hide-on-small-only  hide-on-med-only  hide-on-med-and-down">
	          <img style="padding-top:10%;" src="<?php echo base_url(); ?>assets/img/logomenu2.png" alt="logo" class="responsive-img hide-on-large-only ">
	        </a>
	        <!-- <a href="#" class="brand-logo right"><img style="padding-top:5%;" src="<?php echo base_url(); ?>assets/img/facebook.png" alt="logo" class="responsive-img"></a> -->
	        
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
	    </div>
	</nav>

	<div class="container space-top-2">
		<div class="row">
			<div class="col s12">
				<h3 > <?php echo $datos[0]->NombreSitio; ?> </h3>
				<div class="divider space-bottom-1"></div>
				<p style="font-size: 1rem; font-weight: 300; margin: 0px; padding-bottom: 1rem;">
					Fecha de publicación: 
					<?php echo $datos[0]->fechaCreacion; ?> 
					por
					<?php echo $datos[0]->Nombre." ".$datos[0]->ApellidoPaterno." ".$datos[0]->ApellidoMaterno; ?> 
				</p>
				<img src="<?php echo base_url().'assets/uploads/'.$datos[0]->Url; ?>" class="materialboxed" style="height: 100%; width: 100%; max-height: 350px;">

				<h5 >Descripción</h5>
				<p style="text-align: justify;" class="space-bottom-2">
					<?php 
						echo $datos[0]->Contenido;
					 ?>
				</p>

				<h5 class="space-bottom-1">Ubicación o Dirección</h5>
				<p>
					<?php 
						echo $datos[0]->Direccion;
					 ?>
				</p>
				<div id="map" style="width:100%;height:350px;"></div>
				
			</div>
	    </div>

		<div class="row">
			<div class="col s12 l12">
				<h5 class="">Recomendaciones</h5>
				<p style="text-align: justify;" class="space-bottom-2 caption">
					<?php 
						echo $datos[0]->Recomendaciones;
					?>
				</h5>
				<h5>Galería</h5>
				<div class="row">
				  	<div class="col l12 s12">
  						<div class="popup-gallery">
  							<?php 
	  							if (count($galeria)>0) {
	  								foreach ($galeria as $img) {
	  									echo "
										<a href='".base_url()."assets/uploads/".$img->Url."' title='".$datos[0]->NombreSitio."'>
										<img src='".base_url()."assets/uploads/".$img->Url."' width='270' height='120' style='float: left; padding: 5px;'>
										</a>
	  									";
	  								}
	  							}else{
	  								echo "
										<p>No se han subido imágenes a la galería</p>
	  								";
	  							}
  							 ?>
  							
						</div>
					</div>

					<div class="fb-comments" data-href="http://localhost/gitchetugo/welcome/ejemplo" data-width="100%" data-numposts="5">
						
			        </div>
			    </div>
			</div>
		</div>
	</div>
	
	<footer class="page-footer blue darken-4">
	    <div class="container-fluid" style="padding-bottom: 1%;">
	      <div class="row" style="margin-bottom: 0px;">
	        <div class="col l3 s12">
	          <img src="http://rock3d.16mb.com/assets/img/ChetuGo-02.png" alt="logo" class="responsive-img responsive-img hide-on-small-only hide-on-med-only  hide-on-med-and-down" style="width: 60%; transform: translate3d(50px, 0px, 0px);">
	        </div>
	        <div class="col l9 s12">         
	          <p class="grey-text text-lighten-4 footer" style="text-align: justify;">Este trabajo fue realizado por alumnos de Ingeniería en Tecnologías de la Información y comunicaciones del Instituto Tecnológico de Chetumal y colaboradores de fotografía y video para la materia de Mercadotecnia en Internet.</p>
	        </div>
	      </div>
	    </div>
	  </footer>
		
		<div id="fb-root"></div>

  <!-- 1 Scripts-->
  <script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/materialize.js'); ?>"></script>
    <!-- Magnific Popup core JS file -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
  
  <script>
  	$(document).ready(function(){
  		base_url = "<?php echo base_url(); ?>";
  		//Se ejecuta un setTimeout para actualizar el número de vistas 
  		setTimeout(actualizar_vistas_ajax,5000);
  	});

  	function actualizar_vistas_ajax(){
		var Id_Publicacion = <?php echo $datos[0]->Id_Publicacion; ?>;
		$.ajax({
				url: base_url + "sitio/actualizar_vistas",
            	type: "POST",
            	data: {
                     Id_Publicacion:Id_Publicacion
            	}
				,
	            success: function(respuesta) {
	                var resp = JSON.parse(respuesta);
	                if (resp.respuesta==true) {
	                	console.log("las vistas se actualizaron correctamente");
	                }else{
	                	console.log("ERROR");
	                }              
	            },
	            error: function(xhr, status) {
	                console.log("Error: "+status);
	            }
        });		
    }

    function myMap() {
     var Latitud = <?php echo $datos[0]->Latitud; ?>;
   	 var Longitud = <?php echo $datos[0]->Longitud; ?>;
  	 var myLatLng = {
  	 	lat: Latitud, 
  	 	lng: Longitud
  	 };
      var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          scrollwheel: false,
      	  navigationControl: false,
          mapTypeControl: false,
          scaleControl: false,
          draggable: false,
          center: myLatLng
        }); 
      var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Hello World!'
      });

  }
</script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz_n5_QFgYNuzzd4lXUIi8f2ZPpUbfsKw&callback=myMap"></script>

		<script>
		     $(document).ready(function(){
		      $('.parallax').parallax();
		      $(".button-collapse").sideNav();
		      $('.modal').modal();
		      $('.materialboxed').materialbox();

		      $('.popup-gallery').magnificPopup({
		        delegate: 'a',
		        type: 'image',
		        closeOnContentClick: true,    
		        fixedContentPos: true,
		        tLoading: 'Loading image #%curr%...',
		        mainClass: 'mfp-img-mobile mfp-no-margins mfp-with-zoom',
		        gallery: {
		          enabled: true,
		          navigateByImgClick: true,
		          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		        },
		        image: {
		          verticalFit: true,
		          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		          titleSrc: function(item) {
		            return item.el.attr('title') + '<small>by ChetuGo. </small>';
		          },
		        zoom: {
		          enabled: true,
		          duration: 300 // don't foget to change the duration also in CSS
		        }
		        }
		      });

		    });
		</script>
	
		<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11';
				fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
	    </script>
	</body>
</html>