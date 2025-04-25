
<?php
include("header.php");

$id=$_POST["id"];
$name=$_POST["name"];

$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"UPDATE `mahsol` SET `tozihat`='$name' WHERE `id`=$id;
");
mysqli_close($a);
?>
<?php
 if($b===true)
 {
    
 ?>
 
    <script>
    location.replace("admin.php");
 </script>   
  
 <?php

}else
echo("خطا");
?>
<?php
include("footer.html");
?>