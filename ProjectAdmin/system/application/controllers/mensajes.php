<?php
class mensajes extends Controller {
	
	function mensajes() {
	      parent::Controller();
	}

	function index()
	{
		
		$this->load->view('mensajes');
	}
}
?>