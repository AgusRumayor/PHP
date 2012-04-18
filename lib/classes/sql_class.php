<?php
    class sqlClass{
    	private $sqlString;
		private $currTable;
		public $debug;
		
		function __construct(){
			include_once($GLOBALS['incPath']."dbDriver.php");
			$this->debug = false;
		}
		
		function setDebug(){
			$this->debug =true;
		}
		function Insert($table, $values){
			//$table: string
			//$values: array ('column'=> value...)
			$columns = array_keys($values);
			$param1 = $this->arraykeystosql($columns);
			$param2 = $this->arrayvaluestosql(array_values($values));
			$this->sqlString = "INSERT INTO `".$table."` (".$param1.") VALUES (".$param2.");";
			if($this->debug)
				echo $this->sqlString;
			
			$this->run();
		}
		
		//Only AND conditions, OR (pending)
		function SelectAll($table, $conditions){
			$this->sqlString = "SELECT * FROM `".$table."` WHERE 1=1";
			foreach($conditions as $condition){
				$this->sqlString = $this->sqlString. " AND ".$condition;
			}
			$results = $this->run();
			return mysql_fetch_assoc($results);
		}
		
		function arraykeystosql($arrkeys){
			$sqlColumns = "";	
			foreach($arrkeys as $i){
				$sqlColumns = $sqlColumns."`".$i."`, ";
			}
			$sqlColumns = substr($sqlColumns, 0, -2);
			return $sqlColumns;
		}
		
		function arrayvaluestosql($arrkeys){
			$sqlColumns = "";	
			foreach($arrkeys as $i){
				$sqlColumns = $sqlColumns."'".$i."', ";
			}
			$sqlColumns = substr($sqlColumns, 0, -2);
			return $sqlColumns;
		}
    	function run(){
    		$query = mysql_query($this->sqlString);
			if(!$query){
				die("Please try again! ".mysql_error());
			}
			else{
				$this->sqlString = "";
				return $query;
			}
    	}
    }
?>