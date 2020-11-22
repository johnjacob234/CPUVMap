<?php
	
	$mysql_connection_object=mysqli_connect("localhost","root","") or die ("DOWN!");
		if ($mysql_connection_object) {
			mysqli_select_db($mysql_connection_object,"cpu_dir");
		}
		else
		{
			die("DOWN");
		}	
		
?>
