<?php
	include('setupFile.php');
	include_once($classPath."form_class.php");
	//create day select class
	class dayfSelect extends fSelect{
		function __construct($name){
			parent::__construct($name);
			for ($i=1; $i <= 31; $i++) { 
				$this->addOption("".$i, "".$i, false);
			}
		}
	}
	
	class dayfInput extends fInputText{
		function __construct($name){
			parent::__construct($name, "", "text");
			$this->setSize("3");
		}
	}
	
	class monthfSelect extends fSelect{
		function __construct($name){
			parent::__construct($name);
			$this->addOption("00", "-", true);
			$this->addOption("01", "Jan", false);
			$this->addOption("02", "Feb", false);
			$this->addOption("03", "Mar", false);
			$this->addOption("04", "Apr", false);
			$this->addOption("05", "May", false);
			$this->addOption("06", "Jun", false);
			$this->addOption("07", "Jul", false);
			$this->addOption("08", "Aug", false);
			$this->addOption("09", "Sep", false);
			$this->addOption("10", "Oct", false);
			$this->addOption("11", "Nov", false);
			$this->addOption("12", "Dec", false);
		}
	}	
	
	class yearfSelect extends fSelect{
		function __construct($name){
			parent::__construct($name);
			$year = 2011;
			for ($i=$year; $i > 1920; $i--) { 
				$this->addOption("".$i, "".$i, false);
			}
		}
	}
	
	class yearfInput extends fInputText{
		function __construct($name){
			parent::__construct($name, "", "text");
			$this->setSize("5");
		}
	}
	
	
?>