<?php
session_start();
class Inicio extends Controller {

	function Inicio()
	{
		parent::Controller();
		
	}
	function Index()
	{
		$this->load->view('Master/Inicio');
	}
}
?>