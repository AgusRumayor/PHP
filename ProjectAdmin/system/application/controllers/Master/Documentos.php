<?php
session_start();
class Documentos extends Controller {
	
	function Documentos() {
	      parent::Controller();
		$this->load->view('Master/header');
		$this->load->scaffolding('Documento');
	}

}
?>