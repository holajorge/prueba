<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class administrador extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('administrador_model');
	}
	public function index()
	{
		
		$data['categorias'] = $this->administrador_model->obtenerCategoria();
		$this->load->view('vadmin/administrador_index', $data);
	}
	public function admin_tags()
	{
		$this->load->view('vadmin/vista_tags');
	}
	public function guarda_tags(){
		$nombreTags= $_POST['nombreTags'];
		$consulta = $this->administrador_model->guardartags($nombreTags);
		if ($consulta) {
			$result['respuesta'] = true;
		}else{
			$result['respuesta'] = false;
		}
		echo json_encode($result);
	}
	public function agregarsc(){
		$sitios = $this->administrador_model->sitioscercanos();
		$data['NombreCategorias'] = $sitios;
		$this->load->view('vadmin/agregarsc', $data);
	}
	public function buscardatos(){


	$busca = $this->input->post('busca');
	$bus=$this->administrador_model->obtenerdatos($busca);
	$data['Nombrebusqueda'] = $bus;

	$data['resultado']= true;

	echo json_encode($data);

	}

	public function buscar_sitios(){

		$data['Nombresitios'] = $this->administrador_model->obtenerdatossitio();
		$data['resultado']= true;
		echo json_encode($data);
	}

	public function guardadatos(){
		$sitio= $_POST['sitio'];
		$id_sitios= $_POST['sitios_cercano'];
		$consulta = $this->administrador_model->guardadatossitios($sitio, $id_sitios);
		if ($consulta) {
			$result['respuesta'] = true;
		}else{
			$result['respuesta'] = false;
		}

		echo json_encode($result);

	}

	public function guardarCategoria(){
		
		$numeroCategoria = $this->input->post('numeroCat');
		$nombreCategoria = $this->input->post('nombrec');

		$this->administrador_model->guardarCat($numeroCategoria,$nombreCategoria);

			
	
	}
	public function obtenerCategoria(){

		$data['categorias'] = $this->administrador_model->obtenerCategoria();
		$this->load->view('vadmin/administrador_index', $data);
	}
	
}
