<?php
session_start();
class proyectos extends Controller {
	
	function proyectos() {
	      parent::Controller();
	}

	function index()
	{

		$this->load->view('proyectos');
}
}
?>