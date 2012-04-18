<?php
	if(!isset($setupOn))
		die('You should not access this file directly! Please go back.');
		
	include_once($toolPath.'css_js_tool.php');
	loadCSS($cssPath.'topbar.css');
	include_once($classPath.'translator_class.php');
	$topbarTranslator = new Translator();
	include_once($classPath.'Login_class.php');
	if(!isset($userPerm)){
		$userPerm = new RUser();
		$userPerm->getRoles();
	}
	if($userPerm->ruserType == 1){
		if(!isset($_SESSION))
			session_start(); 
		
		$_SESSION['validateFrom']='topbarForm';
	}
?>
<script language="JavaScript" type="text/javascript">

</script>
<div id="topbarDiv" style=" height:50px;">
	<div id="topbarDiv_middle">
		<?php //Div to log in - if a user is a guest 
		if($userPerm->ruserType == 1){ ?>
		<div id="loginDiv">
				<div id="loginDiv_l">
					<form name="loginF" id="loginF" method="post" action="<?php echo $incDom ."loginRA.php"?>">
						<input type="text" onfocus="this.value='';" onfocusout="if(this.value == ''){this.value='<?php echo $topbarTranslator->Translate('Username / Email'); ?>';}" name="RAusername" class="tfLogin" value="<?php echo $topbarTranslator->Translate('Username / Email'); ?>" />
						<input type="password" onfocus="this.value='';" onfocusout="if(this.value == ''){this.value='<?php echo $topbarTranslator->Translate('Password'); ?>';}" name="RApassword" class="tfLogin" value="<?php echo $topbarTranslator->Translate('Password'); ?>"/>&nbsp;&nbsp;
						<input type="hidden" name="formV" value="<?php echo md5('autorización') ?>" />
					</form>
				</div>
				<div id="loginDiv_r">
					<div id="loginButton" onclick="document.loginF.submit();"><?php echo $topbarTranslator->Translate('Go'); ?></div>
					<?php include_once($toolPath.'button_tool.php'); addButton('loginButton'); ?>
					&nbsp;&nbsp;<div id="signupDiv" onclick="document.getElementById('workspace').src='modules/user/newUser.php';"><?php echo $topbarTranslator->Translate('Sign up!'); ?></div>
					<?php include_once($toolPath.'button_tool.php'); addButton('signupDiv'); ?>
				</div>
		</div>
		<?php } ?>
		<?php //Logging out
		if($userPerm->ruserType > 1){ ?>
		<div id="logoutDiv" onclick="location.href='<?php echo $incDom ."logoutRA.php"?>';"><?php echo $topbarTranslator->Translate('Log out'); ?></div>
		<?php } ?>
	</div>
</div>
