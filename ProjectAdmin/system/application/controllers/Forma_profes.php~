<?php
session_start();
class Forma_profes extends Controller {
	
	function Forma_profes() {
	      parent::Controller();
	}

	function index()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('validation');
		$tabla= "Master";
		$campo= "Nombre";
		$valor= "363592";
		//Utilizacion de librerias
		$this->load->library('basededatos');
		
		$tmp1= $this->basededatos->get_field($tabla, $campo);
		foreach($tmp1 as $r)
		{
			foreach($r as $val)
			{
				echo $val;
			}
		}
	}
}
?>