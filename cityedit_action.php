<?php
include("tag_a.php");

$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"SELECT * FROM `mahsol`WHERE `id`='$id';");
$row=mysqli_fetch_array($b);
mysqli_close($a);
$img=$row['img']
?>
<form action="cityedit.php" method="post">
<input type="file" name="img" value="<?php echo($img);?>"  placeholder="تصویر">
    <input type="text" name="name" value="<?php echo($row["name"]);?>" >
     <input type="text" name="ghymat" value="<?php echo($row["ghymat"]);?>" >
    <input type="text"  name="id"  hidden value="<?php echo($row["id"]);?>">
    <input type="submit"  value="اضافه کردن" class="card">
</form>
<?php

include("footer2.html");
?> 
