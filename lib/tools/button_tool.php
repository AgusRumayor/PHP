<?php
	/* Overview: Tool to handle all the page buttons and add some functionalities
	 * 			Various elements could be added like div, span, input, etc
	 */
?>
<script>
var pageButtons = new Array();
var numButtons = 0;
function addButtonBehavior(elementID){pageButtons[numButtons] = document.getElementById(elementID);
	if(pageButtons[numButtons]){
		pageButtons[numButtons].onmouseover = function(){this.style.cursor='pointer';};
 		pageButtons[numButtons].onmouseout = function(){this.style.cursor='auto';};
 		numButtons++;
	}}
</script>
<?php
    function addButton($element){
    	echo "<script>addButtonBehavior('".$element."');</script>";
    }
?>