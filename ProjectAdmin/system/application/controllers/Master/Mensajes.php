<?php
session_start();
class Mensajes extends Controller {
	
	function Mensajes() {
	      parent::Controller();
		$this->load->view('Master/header');
		$this->load->scaffolding('Mensaje');
	}

}
?>