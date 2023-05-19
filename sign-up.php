<!DOCTYPE html>
<html>
    <head>
        <title>المكتبة الالكترونية</title>
    </head>
    <style type="text/css">
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
    <h2>تسجيل مستخدم جديد</h2>
 <form style="width: 500px;">
    <div>
        <label class="f25">اسم المستخدم</label>
        <input class="f75" type="" name="" placeholder="اسم المستخدم">
    </div>
    <div>
        <label class="f25">الاسم كامل</label>
        <input class="f75" type="" name="" placeholder="الاسم كامل">
    </div>
    <div>
        <label class="f25">كلمة السر</label>
        <input class="f75" type="password" name="" placeholder=" كلمة السر">
    </div>
    <div>
        <label class="f25">إعادة كلمة السر</label>
        <input class="f75" type="password" name="" placeholder="إعادة كلمة السر">
    </div>
    <div>
        <label class="f25">الهاتف</label>
        <input class="f75" type="" name="" placeholder="الهاتف ">
    </div>
    <div>
        <label class="f25">المرحلة</label>
        <select class="f75">
            <option value="الاولى">الاولى</option>
            <option value="الثانية">الثانية</option>
            <option value="الثالثة">الثالثة</option>
            <option value="الرابعة">الرابعة</option>
            <option value="دراسات عليا">دراسات عليا</option>
        </select>
    </div>
    <div>
        <label class="f25">ملاحظات</label>
        <input class="f75" type="" name="" placeholder="ملاحظات">
    </div>
    <div>
        <input style="width: 100%;" type="submit" name="" value="حفظ">
      
    </div>
</form>
</div>
</center>
</body>
</html>