<script type=text/javascript>
function loadJSFile(jsPath){
	var fileref = document.createElement('script');
	fileref.setAttribute("type","text/javascript");
 	fileref.setAttribute("src", jsPath);
 	if (typeof fileref!="undefined")
  		document.getElementsByTagName("head")[0].appendChild(fileref);
  	else
  		alert("The CSS file:"+cssPath+" cannot be found");
}
function loadCSSFile(cssPath){
	var fileref=document.createElement("link");
	fileref.setAttribute("rel", "stylesheet");
	fileref.setAttribute("type", "text/css");
	fileref.setAttribute("href", cssPath);
	if (typeof fileref!="undefined")
  		document.getElementsByTagName("head")[0].appendChild(fileref);
  	else
  		alert("The CSS file:"+cssPath+" cannot be found");
}
</script>
<?php
	function loadJS($jsPath){
		//if(file_exists($jsPath)){
			echo "<script type=text/javascript>loadJSFile('".$jsPath."')</script>";
		//}
		//else{
			//echo "The JS Document -".$jsPath."- cannot be found";
		//}
		
	}
	function loadCSS($cssPath){
		//if(file_exists($cssPath)){
			echo "<script type=text/javascript>loadCSSFile('".$cssPath."')</script>";
		//}
		//else{
			//echo "The CSS Document -".$cssPath."- cannot be found";
		//}
	}
?>