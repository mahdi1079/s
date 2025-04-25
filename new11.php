<?php
include("header.php");

$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"SELECT * FROM `mahsol`WHERE `id`=$id");
mysqli_close($a);
$row=mysqli_fetch_array($b);


?>

<form  action="create2-folder.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" value="<?php echo($row["name"]);?>" >
    <input type="text"  name="id"  hidden value="<?php echo($row["id"]);?>">
    <input type="submit"  value="اضافه کردن" class="card">
</form>

<?php
include("footer.html");
?>
