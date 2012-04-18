<?php
session_start();
class Actividades extends Controller {
	
	function Actividades() {
	      parent::Controller();
		$this->load->view('Master/header');
		$this->load->scaffolding('Actividad');
	}

}
?>