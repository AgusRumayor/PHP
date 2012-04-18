<?php
    class formClass{
		public $formAction;
		public $formName;
		public $formID;
		public $formMethod;
		private $formElements;
		private $formLabels;
		
		function __construct(){
			$this->formMethod = "post";
			$this->formName = "Form1";
			$this->formAction = "";
			$this->formElements = array();
		} 
		
		//sets
		function setMethod($method){
			$this->formMethod = $method;
		}
		
		function setAction($action){
			$this->formAction = $action;
		}
		
		function setName($name){
			$this->formName = $name;
		}
		
		public function loadPrettyForms(){
			include_once($GLOBALS['toolPath']."css_js_tool.php");
			//addin prettyForms
			loadCSS($GLOBALS['toolDom'].'prettyForms/prettyForms.css');
			loadJS($GLOBALS['toolDom'].'prettyForms/prettyForms.js');
			echo "<script>window.onload = function(){prettyForms();}</script>";
		}
		
		public function setCSS($formCSS){
			include_once($GLOBALS['toolPath'].'css_js_tool.php');
			loadCSS($GLOBALS['cssPath'].$formCSS);
		}
		
		/*
		 * Add new element to the form
		 */
		function addElement($name, $newElement, $break){
			$this->formElements[$name] = $newElement;
			if($break){
				$this->formElements[$name."BR"] = new fBreak();
			}
		}
		
		function display(){
			echo "<form name=".$this->formName." method=".$this->formMethod;
			if ($this->formAction != "")
				echo " action=".$this->formAction;
			echo ">";
			foreach($this->formElements as $element){
				$element->display();
			}
		}
		
		function displayEnd(){
			echo "</form>";
		}
		
    }
	
	/* fInputText class
	 * 
	 */
	class fInputText{
    	public $tfName;
		public $tfId;
		public $tfValue;
		public $tfClass;
		public $tfType;
		public $tfLabel;
		public $tfSize;
		
		/*
		 * tfType
		 * 
		 * text, password, date, color
		 */
		function __construct($name, $label, $type){
			$this->tfName = $name;
			$this->tfId = $name;
			$this->tfType = $type;
			$this->tfLabel = $label;
			$this->tfSize = "15";
		}
		
		function setValue($value){
			$this->tfValue = $value;
		}
		
		function setType($type){
			$this->tfType = $type;
		}
		
		function setLabel($label){
			$this->tfLabel = $label;
		}
		
		function setSize($size){
			$this->tfSize = $size;
		}
		
		function display(){
			if($this->tfLabel != ""){
				echo "<label>".$this->tfLabel."</label>";
			}
			echo "<input type=".$this->tfType." id=".$this->tfId." name=".$this->tfName." size=".$this->tfSize." />";
		}
    }
	
	class fSelect{
		public $sName;
		public $sId;
		public $sLabel;
		public $sMultiple;
		/*
		 * Options structure:
		 * 
		 * $soptions[optionID] = new array("value"="option value", "text"="option text", "selected" = true/false)
		 */
		public $sOptions;
		
		function __construct($name){
			$this->sOptions = array();
			$this->sMultiple = false;
			$this->sName = $name;
			$this->sId = $name;
			$this->sLabel = "";
		}
		
		function setLabel($label){
			$this->sLabel = $label;
		}
		
		function setOptions($options){
			$this->sOptions = $options;
		}
		
		function addOption($value, $option, $selected){
			$arrTemp = $this->sOptions;
			array_push($arrTemp,array($value, $option, $selected));
			$this->sOptions = $arrTemp;
		}
		
		function setMultiple($multiple){
			$this->sMultiple = $multiple;
		}
		
		function display(){
			if($this->sLabel != ""){
				echo "<label>".$this->sLabel."</label>";
			}
			echo "<select "."name=".$this->sName." id=".$this->sId." multiple=".$this->sMultiple." >";
			foreach($this->sOptions as $option){
				if($option[2])
					$option[2]= " selected ";
				else
					$option[2] = " ";
				echo "<option value=".$option[0].$option[2].">";
				echo "".$option[1];
				echo "</option>";
			}
			echo "</select>";
		}
		
	}

	class fButton{
		public $bText;
		public $bAction;
		public $bType;
		
		function __construct($text, $action){
			$this->bText = $text;
			$this->bAction = $action;
			$this->bType = "button";	
		}
		
		function setType($type){
			$this->bType = $type;
		}
		
		function display(){
			echo "<input type=".$this->bType." onclick=\"".$this->bAction."\" value=".$this->bText." />";
		}
		
	}
	
	class fLabel{
		public $labelText;
		public $labelClass;
		
		function __construct($text, $class){
			$this->setCSSLabels();
			$this->labelText = $text;
			$this->labelClass = $class;
		}
		public function setCSSLabels(){
			include_once($GLOBALS['toolPath'].'css_js_tool.php');
			loadCSS($GLOBALS['cssPath']."labels.css");
		}
		public function display(){
			echo "<span class=".$this->labelClass.">".$this->labelText."</span>";
		}
	}
	
	class fCheckbox{
		public $cbName;
		public $cbLabel;
		public $cbChecked;
		
		function __construct($name, $label, $checked){
			$this->cbChecked = $checked;
			$this->cbLabel = $label;	
			$this->cbName = $name;
		}
		
		function display(){
			if($this->cbLabel != ""){
				echo "<label>".$this->cbLabel."</label>";
			}
			if($this->cbChecked){
				echo "<input type=checkbox name=".$this->cbName." value=".$this->cbName." checked />";
			}
			else{
				echo "<input type=checkbox name=".$this->cbName." value=".$this->cbName." />";
			}
		}
	}
	
	class fBreak{
		public $brType;
		function __construct(){
		}
		function display(){
			echo "<br =\"clearAll\" /> <br />";
		}
	}
?>