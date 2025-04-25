<?php
include("header.php");
?> 
<?php
$email=$_POST["a"];
$password=$_POST["b"];
$c=mysqli_connect("localhost","root","","mahsol");
$result=mysqli_query($c,"SELECT * FROM `regster` WHERE `pasword`='$password' and `name`='$email'  ");
$row=mysqli_fetch_array($result);
if($row)
{
    
    $_SESSION["login"]=true;
    $_SESSION["admin"]=$row["admin"];

    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php
}
else
{
    echo("...دقت کنید");
  
}
mysqli_close($c);
?>
<?php
include("footer.html");
?>