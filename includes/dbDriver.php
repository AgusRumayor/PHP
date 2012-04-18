<?php
    include_once($GLOBALS['incPath'].'dbConfig.php');
	mysql_connect($dbConfiguration['dbServer'], $dbConfiguration['dbUser'],$dbConfiguration['dbPass']) or die(mysql_error());
	mysql_select_db($dbConfiguration['dbName']) or die(mysql_error());
	//DB handler class (pending)
?>