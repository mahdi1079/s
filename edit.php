<?php
include("header.php");

$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"SELECT * FROM `mahsol`WHERE `id`=$id");
mysqli_close($a);
$row=mysqli_fetch_array($b);
$imageurl=$row["img"];

?>

<form  action="edit_action.php" method="post" enctype="multipart/form-data">

<input type="file" name="image" placeholder="تصویر" >
<!-- <input class="col-12 col-md m-2" type="file" name="image" placeholder="تصویر" value="<?php echo($imageurl); ?>"> -->
    <input type="text" name="name" value="<?php echo($row["name"]);?>" >
     <input type="text" name="ghymat" value="<?php echo($row["ghymat"]);?>" >
    <input type="text"  name="id"  hidden value="<?php echo($row["id"]);?>">
    <input type="submit"  value="اضافه کردن" class="card">
</form>

<?php
include("footer.html");
?>
