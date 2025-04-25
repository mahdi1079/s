<?php
include("header.php");
$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"SELECT * FROM `mahsol`WHERE `id`=$id");
mysqli_close($a);
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>ساخت فایل PHP</title>
</head>
<?php
$row=mysqli_fetch_array($b);
while($row)
{
?>
<body>
    <h2>ساخت فایل PHP</h2>
    <form action="create-folder.php" method="post">
        <label for="fileName">نام فایل:</label>
        <input type="text" id="fileName" name="fileName" required>
        <input type="text" id="name" name="name"placeholder="توضیحات">
        <input type="text"  name="id"  hidden value="<?php echo($row["id"]);?>">
        <button type="submit">ثبت</button>
    </form>
</body>
<?php
$row=mysqli_fetch_array($b);
}
?>
</html>



<?php
include("footer.html");
?>