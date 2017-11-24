<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

    <!--  Scripts-->
  <script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/materialize.js'); ?>"></script>
    <!-- Magnific Popup core JS file -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>  




</head>
<body>
	<H2>Agregar sitios cercanos</h2>
	<hr>

	<form accept-charset="utf-8" method="POST" action="guardadatos"> 




<p> <?php


	 foreach ($Nombrebusqueda as $fila) {
		echo "<input  name='sitio' type='radio' value='".$fila->Id_Sitio."' />".$fila->NombreSitio."<br>";
		
		//echo "<input name='Nombresitios' name=sitiocercano type='checkbox' />".$fila->NombreSitio."<br>";	
        //echo "<input name='Nombresitios' name=sitiocercano type='checkbox' />".$fila->Id_Categorias."<br>"; 


	} ?>


	 </p>

	 <p> <?php


	 foreach ($Nombresitios as $fila) {
		echo "<input  name=nombresitio[] type='checkbox' value='".$fila->Id_TabSitios."' />".$fila->Nombre_sitio."<br>";
		//echo "<input name='Nombresitios' name=sitiocercano type='checkbox' />".$fila->NombreSitio."<br>";	
        //echo "<input name='Nombresitios' name=sitiocercano type='checkbox' />".$fila->Id_Categorias."<br>"; 
	} ?>


	 </p>

	 <button type="submit" > Guardar </button>

	</form>

<?php if(empty($Nombrebusqueda) ){?>
	<?php echo "No hay Sitios en esta categoría";?>
<?php } ?>
</body> 
</html>