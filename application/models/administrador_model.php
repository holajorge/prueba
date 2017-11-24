<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class administrador_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
      $this->load->database();
   }
   function sitioscercanos(){
	   $sitios = $this->db->get('cat_categorias');
	   return $sitios->result();
	}
    function guardartags($nombreTags){

		//return $this->db->insert('cat_tags', $nombreTags);
		return $this->db->query ("INSERT INTO cat_tags (nombreTags)
					VALUES ('".$nombreTags."')");
		//return true;
	
	}
	
	function obtenerdatos($busca){

		$sitios=$this->db->query("SELECT cat_sitios.Id_Sitio, cat_sitios.NombreSitio FROM cat_sitios, cat_categorias WHERE cat_sitios.Id_Categorias =  $busca  and cat_categorias.Id_Categorias = $busca");
		return $sitios->result();
	
	}

	function guardadatossitios($sitio, $nombresitio){
   		$nombresitio;
   		for ($i=0; $i <sizeof($nombresitio); $i++) { 
   			$sitios=$this->db->query ("INSERT INTO tab_sitiosxsitios (Id_sitiosxsitios, Id_Sitio, Id_TabSitios)
					VALUES ('','".$sitio."', '".$nombresitio[$i]."')");
   		}

   		return true;
	}

	function obtenerdatossitio(){
		$sitios = $this->db->get('tab_sitios');
	   return $sitios->result();

	}
	function guardarCat($numeroCat,$nombreCat){

			$data = array(
				'NumeroCategorias' => $numeroCat,
				'NombreCategorias' => $nombreCat
			);
			$this->db->insert('cat_categorias',$data);

		
				
	}
	function obtenerCategoria(){
		$categorias=$this->db->query("SELECT * FROM cat_categorias ");

		return $categorias->result();
		
	}
}


