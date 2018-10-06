<html>
<head>
    <title>اضافة بيانات</title>
    <link rel="stylesheet" href="style.css" type="text/css" />

</head>
   <meta charset="UTF-8">

<body>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0"dir="rtl">
            <tr> 
                <td>الاسم</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>العمر</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr> 
                <td>الايميل</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr> 
                <td>الوظيفة</td>
                <td><input type="text" name="job"></td>
            </tr>
            <tr>               
                <td><input type="submit" name="Submit" value="اضافة"></td>
                
            </tr>
            
        </table>
        
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
 
        
<br><br/><a href="index.php">الرئيسية</a>
    </form>
    
    
    



</body>
</html>