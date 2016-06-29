                <?php 
                include("header_1.php");
                $q="set names utf8";
                mysql_connect($server,$user_name,$password);
                mysql_select_db($server_db);
                ?>

<head>  <title>پروژه نرم 2</title>
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
      <h1>ویرایش کاربر</h1>
  <center><br><br>
     
<!--  ////////////////////  -->

<?php 
      

mysql_connect($server,$user_name,$password);
mysql_select_db($server_db);
$id=$_POST['id'];
$name=$_POST['name'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
    
$q="update users set ";
$q.='name=\''.$name.'\'';
$q.=',lname=\''.$lname.'\'';
$q.=',username=\''.$username.'\'';
$q.=',password=\''.$password.'\'';
$q.=" where id=".$id;                           
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
    
 <li><a href="http://01design.ir/taxi/">صفحه نخست</a></li>
    <li><a href="http://01design.ir/taxi/taxi_ezafe.php">ایجاد مسیر</a></li>
        <li><a href="http://01design.ir/taxi/taxi_virayesh_hazf.php">حذف یا ویرایش مسیر</a></li>
  <li><a href="http://01design.ir/taxi/sabad.php">تقاضاهای انجام شده</a></li>
      <li><a href="http://01design.ir/taxi/users_ezafe.php">افزودن کاربر</a></li>
  <li><a href="http://01design.ir/taxi/users_virayesh_hazf.php">ویرایش یا حذف کاربر</a></li>
  <li><a href="http://01design.ir/taxi/logout.php">خروج</a></li>


  </ul>
</div>
</body>