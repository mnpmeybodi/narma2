<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style>
body{
	font-family:tahoma; font-size:12px;
}
a{text-decoration:none}
td{text-align:center}
</style>
</head>

<body background="images/e-commerce-banner_shop.jpg" topmargin="1">
<center>
<table  border="0" cellspacing="0" cellpadding="0">
	  <tr>
				<td  colspan="2"><img src="images/banner.jpg" /></td>
	  </tr>
	  <tr>				
				<td height="500" bgcolor="#ffffff"  valign="top"><br />
				<!-- main -->
				<?php 
				include("header_1.php");
				$q="set names utf8";
				mysql_connect($server,$user_name,$password);
				mysql_select_db($server_db);
				?>
                <center>
				<table width="400" dir="rtl" border="0" cellspacing="0" cellpadding="0">
	  <tr>
			<td><a href="index.php">صفحه اصلی</a></td>
			<td><a href="modiriat.php">مدیریت</a></td>
			<td><a href="taxi.php">تقاضای ماشین</a></td>
			<td><a href="sabad.php">تقاضاهای انجام شده</a></td>			
	  </tr>	  
	  
</table>