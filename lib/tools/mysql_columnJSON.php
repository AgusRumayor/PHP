<?php
	//Request method: GET
	require_once 'setupFile.php';
    if(isset($_GET['mysqlTable']) && isset($_GET['mysqlColumn'])){
    	$table = $_GET['mysqlTable'];
		$column = $_GET['mysqlColumn'];
    	require_once $GLOBALS['incPath'].'dbDriver.php';
		
		$queryString = "SELECT $column FROM $table";
		if(isset($_GET['mysqlWhereClause'])){
			$whereParam = $_GET['mysqlWhereClause'];
			$queryString = $queryString." WHERE $column LIKE '%$whereParam%'";
		}
		
		$result = mysql_query($queryString);
		
		if($result){
			$outputData = array();
			$i=0;
			while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
				$outputData[$i] = $row[0];
				$i++;
			}
			echo json_encode($outputData);
		}    
	}
	else{
		echo "Bad Request";
	}
?>