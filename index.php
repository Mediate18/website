<?php
	
	$page = "home";
	if(isset($_GET['page']) && !empty($_GET['page'])){
	    $page = $_GET['page'];
	}
	include("php/layout/page.php");

?>