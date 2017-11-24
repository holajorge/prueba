<?php
defined('BASEPATH') or exit('No direct script access allowed');
class sitios_model extends CI_Model
{
	public function mostrar_contenido($Id_Categorias)
    {
        //Consulta para obtener la información de los sitios
        $this->db->select(
        	'tab_imagenes.Url,tab_imagenes.Indicador,
        	cat_sitios.Id_Sitio,cat_sitios.NombreSitio,
        	cat_sitios.Descripcion,cat_sitios.Contenido,
        	cat_sitios.Recomendaciones,cat_sitios.Direccion,
        	cat_sitios.Latitud,cat_sitios.Longitud,
        	tab_publicacion.fechaCreacion,tab_publicacion.vistas'
        );
        $this->db->from(
        	'tab_imagenes'
        );
        $this->db->join('tab_sitiosimagenes','tab_imagenes.Id_Imagen = tab_sitiosimagenes.Id_Imagen');
        $this->db->join('cat_sitios','tab_sitiosimagenes.Id_Sitio = cat_sitios.Id_Sitio');
        $this->db->join('cat_categorias','cat_sitios.Id_Categorias = cat_categorias.Id_Categorias');
        $this->db->join('tab_publicacion','cat_sitios.Id_Sitio = tab_publicacion.Id_Sitio');

        $this->db->where(
        	"cat_categorias.Id_Categorias =".$Id_Categorias." AND tab_imagenes.Indicador = 0"
        );

        //Ejecutar consulta
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }

    }

    public function informacion_sitio($id){
    	$this->db->select(
    		'tab_imagenes.Url, cat_sitios.Id_Sitio,cat_sitios.NombreSitio,
        	cat_sitios.Descripcion,cat_sitios.Contenido,
        	cat_sitios.Recomendaciones,cat_sitios.Direccion,
        	cat_sitios.Latitud,cat_sitios.Longitud,
        	tab_publicacion.Id_Publicacion,
        	tab_publicacion.fechaCreacion,tab_publicacion.vistas,
            cat_usuarios.Nombre, cat_usuarios.ApellidoPaterno,
            cat_usuarios.ApellidoMaterno'
    	);
    	$this->db->from(
    	    'tab_imagenes'
     	);
     	$this->db->join('tab_sitiosimagenes','tab_imagenes.Id_Imagen = tab_sitiosimagenes.Id_Imagen');
     	$this->db->join('cat_sitios','tab_sitiosimagenes.Id_Sitio = cat_sitios.Id_Sitio');
     	$this->db->join('cat_categorias','cat_sitios.Id_Categorias = cat_categorias.Id_Categorias');
     	$this->db->join('tab_publicacion','cat_sitios.Id_Sitio = tab_publicacion.Id_Sitio');
     	$this->db->join('cat_usuarios','tab_publicacion.Id_Usuario = cat_usuarios.Id_Usuario');
     	$this->db->where(
     		'cat_sitios.Id_Sitio ='.$id.' AND tab_imagenes.Indicador = 0'
     	);

     	//Ejecutar consulta
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function galeria_sitio($id){
    	$this->db->select(
    		'tab_imagenes.Id_Imagen,
    		tab_imagenes.Url,
    		tab_imagenes.Indicador'
    	);
    	$this->db->from(
    		'tab_imagenes'
    	);
    	$this->db->join('tab_sitiosimagenes','tab_imagenes.Id_Imagen = tab_sitiosimagenes.Id_Imagen');
    	$this->db->join('cat_sitios','tab_sitiosimagenes.Id_Sitio = cat_sitios.Id_Sitio');
    	$this->db->where(
    		'cat_sitios.Id_Sitio = '.$id.' AND tab_imagenes.Indicador = 1'
		);

		//Ejecutar consulta
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function actualizar_vistas($Id_Publicacion){

        $vistas = $this->buscar_total_vistas($Id_Publicacion);
        $data = array(
               'vistas' => $vistas[0]->vistas + 1
            );
        $this->db->where('Id_Publicacion', $Id_Publicacion);
        $query = $this->db->update('tab_publicacion', $data);

        if ($query) {
             return true;
         }else{
            return false;
         }
    }

    public function buscar_total_vistas($Id_Publicacion){
        $this->db->select('*');
        $this->db->from('tab_publicacion');
        $this->db->where('tab_publicacion.Id_Publicacion ='.$Id_Publicacion);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }else{
            return false;
        }
    }
}