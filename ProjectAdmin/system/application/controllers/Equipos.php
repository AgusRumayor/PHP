<?php
session_start();
class Equipos extends Controller {
	
	function Equipos() {
	      parent::Controller();
	}

	function index()
	{

		$this->load->view('Equipos');
}
}
?>