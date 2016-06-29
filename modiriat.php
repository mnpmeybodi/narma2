                <?php 
                include("header_1.php");
                $q="set names utf8";
                mysql_connect($server,$user_name,$password);
                mysql_select_db($server_db);
                ?>

<head>
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
      <h1>مدیریت</h1>
       
<!--  ////////////////////  -->

<center>
<br />
<table width="400" border="1" cellspacing="0" cellpadding="0" style="
    text-align: center;
">
      <tr>
                <td colspan="3">تقاضاهای انجام شده از طرف کل کاربران  </td>
      </tr>
<?php
mysql_connect($server,$user_name,$password);
mysql_select_db($server_db);

 $q="select taxi.* from taxi,sabad where taxi.id=sabad.taxi_id";
$result=mysql_query($q);
$co=0;
while($row=mysql_fetch_array($result,MYSQL_BOTH))
{
    $co+=$row["mablag"];
?>

      
<tr>
                <td><?php echo $row["mablag"] ?></td>
                <td><?php echo $row["mabda"] ?></td>
                <td><?php echo $row["magsad"] ?></td>
                
      </tr>


<?php
} 
?>
<tr>
                <td colspan="3">جمع کل : <?php echo $co ?></td>
      </tr>
</table>


<!--  ////////////////////  -->



</center>





    </div>
 
 
 
    </div>
  </center>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<div class="menu">
  <i class="fa fa-bars"></i>
  <ul>
    <li><a href="http://01design.ir/taxi/taxi_ezafe.php">ایجاد مسیر</a></li>
    <li><a href="http://01design.ir/taxi/taxi_virayesh_hazf.php">حذف یا ویرایش مسیر</a></li>
      <li><a href="http://01design.ir/taxi/sabad.php">تقاضاهای انجام شده</a></li>
      <li><a href="http://01design.ir/taxi/users_ezafe.php">افزودن کاربر</a></li>
  <li><a href="http://01design.ir/taxi/users_virayesh_hazf.php">ویرایش یا حذف کاربر</a></li>
    
  </ul>
</div>
</body>