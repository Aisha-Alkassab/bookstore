<!DOCTYPE html>
<html>
    <head>
        <title>المكتبة الالكترونية</title>
    </head>
    <style type="text/css">
        .l1{ 
            font-size: 24px;
            color: #000;
            text-align: right;
            float: right;
            padding: 5px;
        }
        .f25{
            width: 24%;
            float: right;
            padding: 5px;
        }
        .f75{
            width: 74%;
            float: right;
            padding: 5px;
        }

    </style>
    <body>
        <center>   
        <link rel="stylesheet" href="./index.css" />
     <?php
     include 'list.php';
     ?>

           
<div id="d5" style="width: 100%; height: 500px;">
    <br><br>
    <h2>بيانات الدخول</h2>
 <form style="width: 500px;">
    <div>
        <label class="f25">اسم المستخدم</label>
        <input class="f75" type="" name="">
    </div>
    <div>
        <label class="f25">كلمة السر</label>
        <input class="f75" type="" name="">
    </div>
    <div>
        <input style="width: 100%;" type="submit" name="" value="دخول">
    </div>
</form>
<a href="sign-up.php">ليس لدي ارسال</a>
</div>
</center>
</body>
</html>