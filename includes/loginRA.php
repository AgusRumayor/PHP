<?php
	include_once('setupFile.php');
	session_start(); 

	if(isset($_SESSION['validateFrom'])){
		if($_SESSION['validateFrom'] == "topbarForm"){
			session_destroy();
			if($_POST['formV'] == md5("autorización"))
			{
				include_once($classPath.'Login_class.php');
				$loginuser = new RUser();
				//validate textfields
				
				//authenticate user
				if($loginuser->userAuthenticate($_POST['RAusername'], $_POST['RApassword']))
					header('Location: '.$raDom);
				else
					echo "bad".$loginuser->errorMessage;
			}
		}
	}
	else{
		echo "Please login from the web browser";
	}
?>