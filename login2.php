<?php
include("header.php");
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$u=$_POST["u"];
$g=mysqli_connect("localhost","root","","mahsol");
mysqli_query($g,"INSERT INTO `regster`(`name`, `pasword`, `repasword`, `email`) VALUES ('$a','$b','$c','$u')");
mysqli_close($g);
// echo("ثبت نام موفق بود");
?>
<script>
        location.replace("index.php");
    </script>
<?php
include("footer.html");
?>
