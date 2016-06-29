<?php
        error_reporting (E_ALL & ~E_NOTICE & ~E_STRICT);
        
        //شروع یک نشست
        session_start();
        //دریافت و تنظیم متغیرهای ارسال شده توسط کاربر
        @$username = $_POST['username'];
        @$password = $_POST['password'];
        @$check = $_POST['check'];
?>



<!doctype html>
<html lang="fa">
<head>
        <meta charset="utf-8" />
        <title>پروژه نرم 2</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="fa">
        <link href="css/login.css" rel="stylesheet" type="text/css" />  
        <link href="font.css" rel="stylesheet" type="text/css" />   
        <script type="text/javascript" src="css/dialog_box.js"></script>
</head>



<body id="content">

    <div id="Show"></div>
    <div class="Joomina">
    
    <div class="first">
        <a class="home" href="index.html"></a>
        
    
    
    <?php
    error_reporting (E_ALL & ~E_NOTICE & ~E_STRICT);
    
    //بررسی معتبر بودن اطلاعات ارسالی کاربر
    //نام کاربری
    if (!isset($username) || $username == ''){
        ?>
        <h1>فیلد نام کاربری نباید خالی باشد!</h1>
                </div>
                
                  <div class="inputs">
                        </div>
                        <div class="second">
                        <div class="right">
                       
                        </div>
                        <div class="logins">
                </div>
                
                        <div class="s-login">
                        <a class="reg" href="http://01design.ir/taxi/" title="برگشتن" target="_self">برگشت به صفحه قبل</a>
                        </div>
                        
                </div>
    
        <?php
        
        
       // echo "فیلد نام کاربری نباید خالی باشد!";
        $check_error = 1;
    }
    //کلمه عبور
    elseif (!isset($password) || $password == ''){
        ?>
      <h1>فیلد کلمه عبور نباید خالی باشد!</h1>
                </div>
                
                  <div class="inputs">
                        </div>
                        <div class="second">
                        <div class="right">
                       
                        </div>
                        <div class="logins">
                </div>
                
                        <div class="s-login">
                        <a class="reg" href="http://01design.ir/taxi/" title="برگشتن" target="_self">برگشت به صفحه قبل</a>
                        </div>
                        
                </div>  
        
        <?php
       // echo "فیلد کلمه عبور نباید خالی باشد!";
        $check_error = 1;
    }
    //اطلاعات اتصال به پایگاه داده
    @$con = mysql_connect("localhost","abolfaz3_mnP72","mnpN(mn5722-irnic)")
    or die(mysql_error());
    //نام دیتابیس
    
    mysql_select_db("abolfaz3_taxi", $con)
    or die(mysql_error());
    //جلوگیری از نفوذ به دیتابیس
    $username = mysql_real_escape_string($username);
    $password = md5($password);
    if ($check_error != 1 && $check == 'sended'){
        //تطبیق اطلاعات کاربر با آنچه که در دیتابیس ذخیره شده
        @$result = mysql_query ("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
        // تعداد ردیف های موجود
        @$count = mysql_num_rows($result);
        if($count > 0){
            // اطلاعات کاربر درست است، تنظیم مجوز های استفاده از بخش اعضاء 
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            // اطلاعات کاربر صحیح است
           # echo "شما به سایت وارد شده اید!<br />"; 
            ?>
            
            
            
            
              <h1>با موفقیت به سایت وارد شده اید</h1>
    </div>
            <div class="inputs">
            </div>
    
    
    <div class="second">
            <div class="right">
           
            </div>
            <div class="logins">
    </div>
    
            
                     <div class="s-login">
                            <a class="reg" href="http://01design.ir/taxi/taxi_ezafe.php" title="برگشتن" target="_self">ایجاد مسیرها</a>
                            <a class="reg" href="http://01design.ir/taxi/taxi_virayesh_hazf.php" title="برگشتن" target="_self">ویرایش یا حذف مسیرها</a>
                            <a class="reg" href="http://01design.ir/taxi/sabad.php" title="برگشتن" target="_self">تقاضا های انجام شده</a>
                            <a class="reg" href="
http://01design.ir/taxi/users_ezafe.php" title="برگشتن" target="_self">اضافه کردن عضو</a>
                            <a class="reg" href="http://01design.ir/taxi/users_virayesh_hazf.php" title="برگشتن" target="_self">ویرایش و حذف عضو</a>
                                <form action="logout.php" method="post">
        <input type="submit" value="خروج" style="    margin-left: 106px;" />
    </form> 
                        </div>
    <div>

    </div>
    </div>
    
    
    
    
          
            
            <?php 
        }
        else{
            // اطلاعات کاربر صحیح نیست
           # echo "اطلاعات وارد شده صحیح نیست!<br />";
            
                    ?>
                  <h1>اطلاعات وارد شده صحیح نیست!</h1>
                </div>
                
                  <div class="inputs">
                        </div>
                        <div class="second">
                        <div class="right">
                       
                        </div>
                        <div class="logins">
                </div>
                
                        <div class="s-login">
                                                   <a class="reg" href="http://01design.ir/taxi/" title="برگشتن" target="_self">برگشت به صفحه قبل</a>

                        </div>
                        
                </div>
    
            
            <?php 
            
        }
    }
    //پایان ارتباط با پایگاه داده  
    mysql_close($con);
    ?>
</body>
</html>