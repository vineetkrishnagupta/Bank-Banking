<?php

	$coon = mysqli_connect('localhost','root','','bank');
	if(!$coon){
		die("error".mysqli_connect_error());
	}

?>