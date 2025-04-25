<?php
include("header.php");

$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"SELECT `ghymat` FROM `mahsol`");
$r=$b;
mysqli_close($a);

?>





<?php
$row=mysqli_fetch_array($b);

 ?>

<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" style="font-style: Arial; height: 250px; " data-bs-smooth-scroll="true" class=" shadow scrollspy-example bg-body-tertiary p-3 rounded-2 col-12 " tabindex="0">

  <h4 id="scrollspyHeading1" style="font-style: Calibri Light;">تعداد خرید : <?php $f?> </h4>
  <h4 id="scrollspyHeading5"></h4>
  <p>قیمت :

 </p>
  <h4 id="scrollspyHeading5"></h4>
  <p></p>
  <h4 id="scrollspyHeading5"></h4>
  <p></p>
  <h4 id="scrollspyHeading5"></h4>
  <p></p>
  <h4 id="scrollspyHeading5"></h4>
  <p></p>
  <h4 id="scrollspyHeading5"></h4>
  <p></p>
  <h4 id="scrollspyHeading5"></h4>
  <p></p>
  <h4 id="scrollspyHeading5"></h4>
  <button type="button" class="btn btn-primary float-start " id="l">خرید</button>
  <script src="l.php"></script>
  <h4 id="scrollspyHeading5"></h4>
  <p></p>
</div> 
<?php


?> 



<?php
include("footer.html");
?>
  