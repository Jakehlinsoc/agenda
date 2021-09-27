<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mostrar extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{

		parent::__construct();
		$this->load->model('consultas');
		$this->load->model("consultas","consultas");
	}

	 function index()
	{
		$model['tipo_telefono'] = $this-> consultas->fetch_tipo_telefono();
		$this->load->model("consultas");
		$contactos = $this->consultas->getcontacto();
		$this->load->view("main", compact("contactos"));
		
	} 
	



}
?>
