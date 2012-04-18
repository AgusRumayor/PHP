<?php
session_start();
class Equipo_Proyecto extends Controller {
	
	function Equipo_Proyecto() {
	      parent::Controller();
		$this->load->view('Master/header');
		$this->load->scaffolding('Equipo_Proyecto');
	}

}
?>