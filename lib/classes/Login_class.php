<?php
    class RUser{
    	public $ruserType; //User role (See 'Permiso' table)
		public $ruserName; //User name or username
		public $errorType; //Get login error
		
		/* Error login Types
		 * 
		 * 1: DB data error (Code error/corrupted data)
		 * 2: Password doesn't match
		 * 
		 */
		
    	function __construct(){
    	}
		
		function getRoles(){
			//if(!isset($_SESSION))  
				session_start(); 
			
			if(isset($_SESSION['rUserType']) && isset($_SESSION['rUserName'])){
				$this->ruserType = $_SESSION['rUserType'];
				$this->ruserName = $_SESSION['rUserName'];
			}
			else{
				$this->ruserType = 1;
				$this->ruserName = "Undefined";
			}
		}
		function userAuthenticate($username, $userpassword){
			//matching DB users
			include_once('dbDriver.php');
			$query = "SELECT U.Username, U.Password, U.Email, U.Blocked, UP.IdPermission FROM User AS U JOIN User_Permission AS UP ON U.Id = UP.IdUser WHERE U.Username ='$username' OR U.Email ='$username'";
			$userDB = mysql_query($query) or die(mysql_error()); 
			if(mysql_num_rows($userDB) == 1){
				$dbValues = mysql_fetch_row($userDB);
				if(md5($userpassword) == $dbValues[1]){
					//if(!isset($_SESSION)) 
					session_start(); 
			
					$_SESSION['rUserType'] = $dbValues[4];
					$_SESSION['rUserName'] = $username[0];
					return true;
				}
				else{
					$this->errorMessage = 2;
					return false;
				}
			}
			else{
				$this->errorMessage = 1;
				return false;
			}
			
		}
    }
?>