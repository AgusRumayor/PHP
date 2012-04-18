<?php
    abstract class divClass{
    	public $CSSfile;
		public $divID;
		
		public function setCSS(){
			include_once($GLOBALS['toolPath'].'css_js_tool.php');
			loadCSS($GLOBALS['cssPath'].$this->CSSfile);
		}
		
		function display(){
			echo "<div id=\"$this->divID\">";
		}
		
		function displayEnd(){
			echo "</div>";
		}
    }
?>