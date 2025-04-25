
<?php
include("header.php");
?> 


<section id="d6">
<form  name="login" action="lo.php" method="post">
   <div id="vasat5" class="card col-4 shadow">
    <div class="m-1 row">
    <label id="fotbal5">نام کاربری</label>
     <input type="text"  name="a" class="col-5">
    

     <label id="fotbal5">رمز</label>
     <input type="password"  name="b"class="col-5">
     </div>
     
</form>
<div class="col-3">
<button onclick="ngh()" id="log" class="m-1 card shadow">ورود</button> 
<script src="login.js"></script>  
</div>
</div>


<?php
include("footer.html");
?>