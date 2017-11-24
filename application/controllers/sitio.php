<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sitio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sitios_model');	
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function sitios_emblematicos()
	{
        $data['datos'] = $this->sitios_model->mostrar_contenido(1);
        $data['nombre_seccion'] = "Sitios Emblemáticos";
		$this->load->view('vistas/contenido',$data);
	}

	public function gastronomia(){
		$data['datos'] = $this->sitios_model->mostrar_contenido(2);
		$data['nombre_seccion'] = "Gastronomía";
		$this->load->view('vistas/contenido',$data);
	}

	public function sitios_recreativos(){
		$data['datos'] = $this->sitios_model->mostrar_contenido(3);
		$data['nombre_seccion'] = "Sitios Recreativos";
		$this->load->view('vistas/contenido',$data);
	}

	public function informacion(){
		$id = $_GET['id'];
		$data['datos'] = $this->sitios_model->informacion_sitio($id);

		if (count($data['datos'])>0) {
			$data['galeria'] = $this->sitios_model->galeria_sitio($id);
			$this->load->view('pagina',$data);
		}else{
			$data['heading'] = "ERROR 404";
			$data['message'] = "NO SE ENCONTRÓ LA PÁGINA";
			$this->load->view('errors/html/error_404',$data);
		}
		
	}

	public function actualizar_vistas(){
		$id_publicacion = $_POST['Id_Publicacion'];
		
		$query = $this->sitios_model->actualizar_vistas($id_publicacion);

		if ($query) {
			$result['respuesta'] = true;
		}else{
			$result['respuesta'] = false;
		}
		
		echo json_encode($result);
	}
}