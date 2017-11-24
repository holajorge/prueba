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
	<form accept-charset="utf-8" method="POST" id="cat" action="buscardatos">
	 <select id="categorias" required="required" name="categoria">
                <?php
                  foreach ($NombreCategorias as $fila) {
                 ?>
            <option   value="<?php echo $fila->Id_Categorias ?>"> <?php echo $fila->NombreCategorias ?></option>
           <?php  } ?>     
     </select>
		<button type="submit"  > Buscar </button>
	</form>
			<table>
			 <thead>
			  <tr>
			     <th>Nombre del sitio</th>
			     <th></th>
			  </tr>
			 </thead>
			 <tbody id="informacionsitios">
			 </tbody>
			</table>

			<div id="infositios">
				
			</div>

			<button onclick="guardar_sitios_cercanos()">Guardar</button>
	</body>

	<script>
		$("#cat").on("submit", function(e) {
    e.preventDefault();
    var categoria = $("#categorias").val();

    //var password = $("#password").val();
    
        $.ajax({
            url: "http://localhost/gitchetugo/administrador/buscardatos",
            type: "POST",
            data: {
                busca: categoria
               
            },
           
            success: function(respuesta) {
                var obj = JSON.parse(respuesta);
                html = "";

                if (obj.resultado == true) {
                    for (l in obj.Nombrebusqueda) {
                        html += "<tr>";
                        html += "<td> " + obj.Nombrebusqueda[l].NombreSitio + " </td>";
                        html += "<td style='text-align: center;'><button onClick='mostrar("+ obj.Nombrebusqueda[l].Id_Sitio +")'>seleccionar</button></td>";
                        html += "</tr>";
                    }
                }
                $("#informacionsitios").html(html);

                
            }
        });   
	});
		var id_sitio;
		function mostrar(Id_Sitio) {
			id_sitio = Id_Sitio;
			var tableInicio ="<table><thead><tr><th>Nombre del sitio</th><th></th></tr></thead><tbody>";
			var tablefin = "</tbody></table>";
			$.ajax({
	            url: "http://localhost/gitchetugo/administrador/buscar_sitios",          
	            success: function(respuesta) {
	                var obj = JSON.parse(respuesta);
	                html = "";
	                if (obj.resultado == true) {
	                	html += tableInicio;
	                    for (l in obj.Nombresitios) {
	                        html += "<tr>";
	                        html += "<td> " + obj.Nombresitios[l].Nombre_sitio + " </td>";
	                        html += "<td style='text-align: center;'><input type='checkbox' id='sitios_cercanos' name='sitios_cercanos[]' value='"+ obj.Nombresitios[l].Id_TabSitios+"'/></td>";
	                        html += "</tr>";
	                    }
	                    html += tablefin;
	                }
	                $("#infositios").html(html);

	                
	            }
	        });
		}
			function guardar_sitios_cercanos(){
				var checkboxList = new Array();

				$('input[name="sitios_cercanos[]"]:checked').each(function(){
					checkboxList.push($(this).val());
				});

		        $.ajax({
		            url: "http://localhost/gitchetugo/administrador/guardadatos",
		            type: "POST",
		            data: {
		                sitio: id_sitio,
		                sitios_cercano: checkboxList

		            },
	            success: function(respuesta) {
	                var obj = JSON.parse(respuesta);
	           
	                if (obj.respuesta == true) {
	                	alert("corrrrrrecto");
	                }else{
	                	alert("error");
	                }
	                
	            }
	        	});
	    
			}
	</script>
</html>