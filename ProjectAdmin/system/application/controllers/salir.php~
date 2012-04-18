<?php
session_start();
class salir extends Controller{
	
	function salir() {
	      parent::Controller();
	}

	function index()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->load->view('salir');
	}
	
}
?>