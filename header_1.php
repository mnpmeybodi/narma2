<?php 
 //------------------------
	$server="localhost";
	$user_name="abolfaz3_mnP72";
	$password="mnpN(mn5722-irnic)";
	$server_db="abolfaz3_taxi";
	//------------------------ 
	 
				
				$q="set names utf8";
				mysql_connect($server,$user_name,$password);
				mysql_select_db($server_db);
				mysql_query($q);
?>