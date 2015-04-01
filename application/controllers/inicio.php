<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	/*
	*************************************************************
	Página/Clase    : Controller/inicio.php
	Propósito       : Página de administrador
	Notas           : N/A
	Modificaciones  : N/A
	******** Datos Creación *********
	Autor           : Junior Tello
	Fecha y hora    : 04/04/2015 - 15:12 hrs.
	*************************************************************
	*/
	public function index()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */