<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct()
	{

		parent::__construct();
		$this->load->model('consultas');
	//	$this->load->model("consultas","consultas");
	}

	 function index()
	{
		
		$this->load->model("consultas");
		$model['tipo_telefono'] = $this-> consultas->fetch_tipo_telefono();
		$contactos = $this->consultas->getcontacto();
		$this->load->view("main", compact("contactos"), $model);
		//$this->load->view("main", $model);	
		$dato['string'] = 'Agenda Electrónica';
		$this->load->view('header');
		$this->load->view('footer');
	} 
	


//GUARDAR REGISTROS
	function save()
	{
		print_r($_POST);
		$contacto["telefono"]=$this->input->post("telefono");
		$contacto["nombres"]=$this->input->post("nombres");
		$contacto["apellidos"]=$this->input->post("apellidos");
		$contacto["observaciones"]=$this->input->post("observaciones");
		
		$this->consultas->contacto_save($contacto);
	}


}
?>
