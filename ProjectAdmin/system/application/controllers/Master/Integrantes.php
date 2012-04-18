<?php
session_start();
class Integrantes extends Controller {
	
	function Integrantes() {
	      parent::Controller();
		$this->load->view('Master/header');
		$this->load->scaffolding('Integrantes');
	}

}
?>