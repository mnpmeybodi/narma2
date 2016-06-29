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
      <h1>لطفا اطلاعات مورد نظر خود را ویرایش کنید</h1>
  <center><br><br>
     
<!--  ////////////////////  -->


<center>لطفا اطلاعات مورد نظر خود را ویرایش کنید<br><br><br>
<br>
<?php 
mysql_connect($server,$user_name,$password);
mysql_select_db($server_db);
$virayesh=$_REQUEST['virayesh'];
$q="select * from taxi where id=$virayesh";
$r=mysql_query($q) or die("<center>بازیابی اطلاعات با مشكل مواجه شده است لطفا با مدیریت تماس بگيرد");
$row=mysql_fetch_object($r);
?>
<form action="taxi_virayesh2.php" method="post" >
<input type="hidden" value="<?php echo $virayesh ?>"  name="id"/>

<table width="400" border="0" dir=rtl><tr>
                                            <td align="left" width="150">کد : </td>
                                                    <td align="right"><input name="code" value="<?php echo $row->code ?>" type="text"  style="font-family:tahoma; font-size:11px;" size="50"></td>
                                          </tr><tr>
                                                    <td align="left" width="150">از تاریخ : </td>
                                                    <td align="right"><input name="az_tarikh" value="<?php echo $row->az_tarikh ?>" type="text"  style="font-family:tahoma; font-size:11px;" size="50"></td>
                                          </tr><tr>
                                                    <td align="left" width="150">تا تاریخ: </td>
                                                    <td align="right"><input name="ta_tarikh" value="<?php echo $row->ta_tarikh ?>" type="text"  style="font-family:tahoma; font-size:11px;" size="50"></td>
                                          </tr><tr>
                                                    <td align="left" width="150">مبدا : </td>
                                                    <td align="right"><input name="mabda" value="<?php echo $row->mabda ?>" type="text"  style="font-family:tahoma; font-size:11px;" size="50"></td>
                                          </tr><tr>
                                                    <td align="left" width="150">مقصد : </td>
                                                    <td align="right"><input name="magsad" value="<?php echo $row->magsad ?>" type="text"  style="font-family:tahoma; font-size:11px;" size="50"></td>
                                          </tr><tr>
                                                    <td align="left" width="150">قیمت : </td>
                                                    <td align="right"><input name="mablag" value="<?php echo $row->mablag ?>" type="text"  style="font-family:tahoma; font-size:11px;" size="50"></td>
                                          </tr>
                                          
                                          </table>

<br>
<br>
<center><input value="   ثبت اطلاعات   " size="3" type="submit" style="font-family:tahoma; font-size:11px;">
<br /><center><a href="modiriat.php">بازگشت</a></center>
</form> 

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