<?php

class Muestra extends Controller {

	function Muestra()
	{
		parent::Controller();
		//Busca la tablita	
		$this->load->scaffolding_1('Alumno');
	}
	/*function Index(){
		$par=1;
		//Utilizacion de librerias
		$this->load->library('prueba1');
		
		$tmp1= $this->prueba1->r($par);
		echo $tmp1;
	}*/
}
?>