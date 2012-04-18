<?php
session_start();
class Form_master extends Controller {
	
	function Form_master() {
	      parent::Controller();
	}

	function index()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('validation');
		echo $Datos ['Nombre'];

}
?>