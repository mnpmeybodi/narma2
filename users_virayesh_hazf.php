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
      <h1>مدیریت کاربر</h1>
  <center><br><br>
     
<!--  ////////////////////  -->

<script language="javascript">
function delete1(target,majmoe)
{
        yesno=window.confirm('آيا از حذف اين مجموعه مطمئن هستيد ');
        if(yesno)
        {
                window.location.href='users_hazf.php?delete='+target+'&majmoe='+majmoe;
        }
}
</script>

<br />
<br /><center>
<table width="90%" dir="rtl" border="1" cellpadding="0" cellspacing="0" bordercolor="#dcddde">
            <tr>
                <td width=1>شماره</td>

                <td>نام</td>
                
                <td>نام خانوادگی</td>
                
                <td width=100>حذف اطلاعات</td>
                <td width=100>ويرايش اطلاعات</td>
             </tr>
<?php 
mysql_connect($server,$user_name,$password);
mysql_select_db($server_db);
$q="select * from users  ";
$r=mysql_query($q) or die("<center>ثبت اطلاعات با مشكل مواجه شده است لطفا با مدیریت تماس بگيرد");
$i=0;
while($row=mysql_fetch_object($r))
{
            $i++;
            if($i % 2==0)
            {
                    
                    echo "<tr bgcolor=\"#dcddde\">";
            }
            else
            {
                    echo "<tr>";
            }
                echo " 
                        <td width=10%>$i</td>
                        
                <td>$row->name</td>
                
                <td>$row->lname</td>
                <td ><a href='javascript:delete1($row->id)'>حذف</a></td>
                        <td><a href='users_virayesh.php?virayesh=$row->id'>ويرايش</a></td>
                        </tr>";
            
            
}

?>  


  
</table>

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