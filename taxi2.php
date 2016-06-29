            <?php
		error_reporting(E_ALL & ~E_DEPRECATED & ~E_WARNING & ~E_NOTICE & ~E_STRICT);
		
		//شروع یک نشست
		session_start();
		
		//بررسی تنظیم شدن یا نشدن متغیرهای سشن
		if (!isset($_SESSION['username']) || !isset($_SESSION['password'])){
		//در صورتی که متغیرهای سشن تنظیم نشده باشند، کاربر مجاز به دیدن ادامه صفحه نیست و او را به صفحه اصلی منتقل می کنیم
		header("location:index.html");     
}
?>  



 <?php 
                include("header_1.php");
                $q="set names utf8";
                mysql_connect($server,$user_name,$password);
                mysql_select_db($server_db);
                ?>

<head>
        <title>پروژه نرم 2</title>
    <link rel="stylesheet" media="all" href="style.css" />
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="fa">
             <link href="font.css" rel="stylesheet" type="text/css" />  
<script type="text/javascript">
    

</script>

</head>
<body class="yekan white500">
  <div class="header blue500">
    <div class="bar blue700"></div>
  </div>


 


  <center class="page">
    <div class="align title">تاکسی تلفنی آنلاین</div>
    <div class="align sheet white">
      <h1>سفارش</h1>
  <center><br><br>
     
<!--  ////////////////////  -->
<?php 
mysql_connect($server,$user_name,$password);
mysql_select_db($server_db);

$k=$_REQUEST['k'];

 $q="insert into sabad values(null,$k,'".$_SESSION["username"]."')";
mysql_query($q);
$q="update kala set rezerv=rezerv+1,tedad=tedad-1 where id=$k";
mysql_query($q);

            
            echo "سفارش ماشین انجام شد";


?>

<!--  ////////////////////  -->

<!--
                </td>
      </tr>
</table>
  -->

</center>





    </div>
 
 
 
    </div>
  </center>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<div class="menu">
  <i class="fa fa-bars"></i>
  <ul>
  <li><a href="http://01design.ir/taxi/home_u.php">صفحه نخست</a></li>
  <li><a href="http://01design.ir/taxi/taxi.php">سفارش </a></li>
  <li><a href="http://01design.ir/taxi/logout.php">خروج</a></li>
    
  </ul>
</div>
</body>