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
      <h1>اضافه کردن کاربر</h1>
  <center><br><br>
     
<!--  ////////////////////  -->
<form action="users_ezafe2.php" method="post" enctype="multipart/form-data">

<table width="400" border="0" dir="rtl"><tr>
                                                    <td align="left" width="150">نام : </td>
                                                    <td align="right"><input name="name" type="text"  style="font-family:tahoma; font-size:11px;" size="50"></td>
                                          </tr><tr>
                                                    <td align="left" width="150">نام خانوادگی : </td>
                                                    <td align="right"><input name="lname" type="text"  style="font-family:tahoma; font-size:11px;" size="50"></td>
                                          </tr><tr>
                                                    <td align="left" width="150">نام کاربری : </td>
                                                    <td align="right"><input name="username" type="text"  style="font-family:tahoma; font-size:11px;" size="50"></td>
                                          </tr><tr>
                                                    <td align="left" width="150">کلمه عبور : </td>
                                                    <td align="right"><input name="password" type="text"  style="font-family:tahoma; font-size:11px;" size="50"></td>
                                          </tr></table>

<br>
<br>
<center><input value="   ثبت اطلاعات   " size="3" type="submit" style="font-family:tahoma; font-size:11px;">

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