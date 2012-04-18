<?php
    include_once($GLOBALS['toolPath'].'css_js_tool.php');
	loadCSS($GLOBALS['cssPath'].'elements/search.css');
?><div id="searchBack"></div>
<div id="searchDiv">
	<div id="searchC" align="center"><input type="text" id="searchText" name="searchText" class="searchInput" /><div id="searchButton">Search</div></div>
	<?php include_once($GLOBALS['toolPath'].'button_tool.php'); addButton('searchButton'); ?>
</div>