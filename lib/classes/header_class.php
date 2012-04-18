<?php
    class headObj{
    	public $docType;
		public $docLang;
		public $docCharset;
		public $docCSS;
		public $docJS;
		public $docAuthor;
		public $docTitle;
		public $docIcon;
		public $docAppleIcon;
		
		function __construct(){
			$this->docType = "<!DOCTYPE HTML>";
			$this->docLang = "en";
			$this->docCharset = "utf-8";
			$this->docAuthor = "Agustin Rumayor : d_agus1@yahoo.com";
			$this->docTitle = "New App Document";
		}
		
		function addCSSDoc($cssPath){
			$this->docCSS= $this->docCSS . "<link rel=\"stylesheet\" type=\"text/css\" href=\"".$cssPath."\" /> \n ";
		}
		
		function addJSDoc($jsPath){
			$this->docJS = $this->docJS . "<script language=javascript src=\"".$jsPath."\" type=text/javascript></script>";
		}
		
		function display(){
			echo $this->docType;
			echo"\n<html lang=\"".$this->docLang."\">\n";
			echo "<head>\n";
			echo "<meta charset=\"".$this->docCharset."\" />\n";
			echo "<title>\n".$this->docTitle."\n</title>\n";
			echo "</head>";
		}
		
		function displayEnd(){
			echo "</html>";
		}
    }
?>