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
      <h1>اضافه کردن مسیر</h1>
       
<!--  ////////////////////  -->

<?php 
mysql_connect($server,$user_name,$password);
mysql_select_db($server_db);
$code=$_POST['code'];
$az_tarikh=$_POST['az_tarikh'];
$ta_tarikh=$_POST['ta_tarikh'];
$mabda=$_POST['mabda'];
$magsad=$_POST['magsad'];
$mablag=$_POST['mablag'];

$q="insert into taxi values(null,'$code','$az_tarikh','$ta_tarikh','$mabda','$magsad','$mablag')";                          
if(mysql_query($q))
{   
        
echo "<center>اطلاعات با موفقيت در پايگاه ثبت شد";

}
else
{
        echo "<center>ثبت اطلاعات با مشكل مواجه شده است لطفا با مدیریت تماس بگيرد" ;    
}
?>
<br /><center><a href="modiriat.php">بازگشت</a></center>

<!--  ////////////////////  -->


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
  
  <li><a href="http://01design.ir/taxi/">صفحه نخست</a></li>
    <li><a href="http://01design.ir/taxi/taxi_ezafe.php">ایجاد مسیر</a></li>

  <li><a href="http://01design.ir/taxi/sabad.php">تقاضاهای انجام شده</a></li>

  <li><a href="http://01design.ir/taxi/logout.php">خروج</a></li>
    
  </ul>
</div>
</body>