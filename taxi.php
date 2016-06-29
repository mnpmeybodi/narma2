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
    $(document).ready(function(){

  $('.menu-toggle').on('click', function(){
    $('.menu').toggleClass('active');
  });

});

    
</script>

</head>





<body class="yekan white500">





  <div class="header blue500">
    <div class="bar blue700"></div>
  </div>



  <center class="page">
    <div class="align title">تاکسی تلفنی آنلاین</div>
    <div class="align sheet white">
      <h1>تقاضای ماشین</h1>
       


<center> 
<table width="98%" dir="rtl" border="1" bordercolor="#CCCCCC" cellspacing="0" cellpadding="0">
<tr>
            <td>کد  </td>
            <td>از تاریخ </td>
            <td>تا تاریخ </td>
            <td>از مبدا </td>
            <td>تا مبدا </td>
            <td>هزینه</td>
            <td>تقاضای ماشین</td>
</tr>
<?php
mysql_connect($server,$user_name,$password);
mysql_select_db($server_db);

$q="select * from taxi";
$result=mysql_query($q);
while($row=mysql_fetch_array($result,MYSQL_NUM))
{
?>

      <tr>
                
                <td><?php echo $row[1] ?></td>    
                
                <td><?php echo $row[2] ?></td>    
                
                <td><?php echo $row[3] ?></td>    
                
                <td><?php echo $row[4] ?></td>    
                
                <td><?php echo $row[5] ?></td>    
                
                <td><?php echo $row[6] ?></td>    
                
                <td><a href="taxi2.php?k=<?php echo $row[0] ?>">تقاضا</a></td>
      </tr>

<br>
<?php
} 
?>
</table>
<?php
include ("header_3.php");
?>
                </td>
      </tr>
</table>
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