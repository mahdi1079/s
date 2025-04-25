<?php
include("header.php");

?>

<form action="new2.php" method="POST" enctype="multipart/form-data">
<input class="col-12 col-md m-2" type="file" name="image" placeholder="تصویر">
<p>نام:</p>
    <input type="text" name="name2">
   
    <p>قیمت:</p>
    <input type="text" name="ghymat">
    <input type="submit" value="اضافه کردن" class="card">


    
</form>

<?php
include("footer.html");
?>