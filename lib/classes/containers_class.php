<?php
	include_once($GLOBALS['classPath'].'div_aclass.php');
   	class cContainer extends divClass{
    		
    	function __construct(){
    		$this->divID = "CContainer";
			$this->CSSfile = "main.css";
			$this->setCSS();
		}
    }
	
	class lContainer extends divClass{
		function __construct(){
    		$this->divID = "LContainer";
			$this->CSSfile = "main.css";
			$this->setCSS();
		}
		
		function addLogoElement(){
			include($GLOBALS['elemPath'].'logo_el.php');
		}
		function addCategoriesElement(){
			include($GLOBALS['elemPath'].'categories_el.php');
		}
	}
	
	class rContainer extends divClass{
		function __construct(){
    		$this->divID = "RContainer";
			$this->CSSfile = "main.css";
			$this->setCSS();
		}
		
		function addSearchElement(){
			include($GLOBALS['elemPath'].'search_el.php');
		}
		
		function addWorkspaceElement(){
			include($GLOBALS['elemPath'].'workspace_el.php');
		}
	}
?>