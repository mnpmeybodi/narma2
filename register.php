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
    error_reporting(E_ALL ^ E_DEPRECATED);
    
    //اطلاعات اتصال به پایگاه داده
    
    $con = mysql_connect("localhost", "abolfaz3_mnP72", "mnpN(mn5722-irnic)")
    or die(mysql_error());   
    //نام دیتابیس
    mysql_select_db("abolfaz3_taxi", $con)
    or die(mysql_error());
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_WARNING & ~E_NOTICE & ~E_STRICT);
    //دریافت و تعریف متغیر ها
    $username = $_POST['username'];
    $password = $_POST['password'];
    //پیش فرض
    $check_error = 0;
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
                        <a class="reg" href="http://01design.ir/taxi/sigin-up.html" title="برگشتن" target="_self">برگشت به صفحه قبل</a>
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
                        <a class="reg" href="http://01design.ir/taxi/sigin-up.html" title="برگشتن" target="_self">برگشت به صفحه قبل</a>
                        </div>
                        
                </div>  
        
        <?php
        
        //echo "فیلد کلمه عبور نباید خالی باشد!";
        $check_error = 1;
    }
    //مجاز بودن انتخاب حروف انگلیسی به عنوان نام کاربری
    elseif (preg_match('/^[a-zA-Z0-9 _-]+$/', $username) === 0){
        echo "نام کاربری دارای کاراکترهای غیر مجاز است!";
        ?>
         <div class="s-login">
                        <a class="reg" href="http://01design.ir/taxi//sigin-up.html" title="برگشتن" target="_self">برگشت به صفحه قبل</a>
                        </div>
        <?php
        $check_error = 1;
    }
    //جلوگیری از نفوذ به دیتابیس
    $username = mysql_real_escape_string($username);
    $password = md5($password);
    if ($check_error != 1){
    //در این مرحله اطلاعات را در دیتابیس ذخیره خواهیم کرد
    mysql_query("INSERT INTO users (username,password) VALUES('$username','$password')")
    or die(mysql_error());
    
    ?>
            
            
            
            
              <h1>با موفقیت اکانت جدید ساخته شد</h1>
                        <h1>پس از تایید حساب شما توسط مدیریت ، قادر به استفاده از امکانات هستید.</h1>
                        <h1>لطفا منتظر بمانید.</h1>
    
    </div>
            <div class="inputs">
            </div>
    
    
    <div class="second">
            <div class="right">
           
            </div>
            <div class="logins">
    </div>
    
            
            
     
    <div>
    <form action="logout.php" method="post">
    	<input type="submit" value="خروج" />
    </form> 
    </div>
    </div>
    
    
    
          
            
            <?php 
    //echo "عضویت شما با موفقیت انجام شد!<br />";
    }
    //پایان ارتباط با پایگاه داده  
    mysql_close($con);
    ?>



</body>
</html>