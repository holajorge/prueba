<?php
defined('BASEPATH') or exit('No direct script access allowed');

class chetumal extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('global_view/head_view');
        $this->load->view('page_inicio_view');
        $this->load->view('global_view/footer_view');
    }

    public function sitios()
    {
        $this->load->view('global_view/head_view');
        $this->load->view('card_sitios_view');
        $this->load->view('global_view/footer_view');
    }

    public function informacion()
    {
        $this->load->view('global_view/head_view');
        $this->load->view('page_nota_view');
        $this->load->view('global_view/footer_view');
    }

    public function admin()
    {
        $this->load->view('admin_view');

    }
}
