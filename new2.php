<?php
include("header.php");
$image=$_FILES["image"]["name"];
$name=$_POST["name2"];
$ghymat=$_POST["ghymat"];
$imageurl="4/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"INSERT INTO `mahsol`(`name`, `ghymat`, `img`) VALUES ('$name','$ghymat','$imageurl' );");
mysqli_close($a);
?>
<?php
if($b)
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