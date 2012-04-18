<?php
class Proyectos_vista extends Controller {
	
	function Proyectos_vista() {
	      parent::Controller();
		
	}
	function index()
	{
		$this->load->view('Master/header');
		$this->load->view('Master/Proyectos');
	}
}
?>