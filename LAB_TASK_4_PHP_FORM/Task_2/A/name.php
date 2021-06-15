<?php
	
	$Email = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Email = $_REQUEST['email'];
        echo $Email;
		
	}else{
		echo " ";
	}
?>