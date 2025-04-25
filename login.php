<?php
include("header.php");
?>

<!-- <section id="d6" class="col-10 list-inline m-2 card shadow">



<form action="login2.php" method="$_POST" name="login">


<div class="col-6 m-5">
   <div class="mb-5">
  <label for="exampleFormControlInput1" class="form-label">نام کاربری</label>
  <input type="text" class="form-control" id="a" placeholder="-------" name="a">
</div>


<label for="inputPassword5" class="form-label">رمز</label>
<input type="password" id="b" class="form-control " aria-describedby="***********" name="b">
<div id="passwordHelpBlock" class="form-text ">
رمز عبور شما باید 8 تا 20 کاراکتر داشته باشد، دارای حروف و اعداد باشد و نباید دارای فاصله، کاراکترهای خاص یا ایموجی باشد.  



   
   <div class="mb-5">
  <label for="inputPassword5" class="form-label">تکرار رمز</label>
  <input type="password" id="c" class="form-control " aria-describedby="***********" name="c">
</div>


<label for="inputPassword5" class="form-label">ایمیل</label>
<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="f" >
<div id="passwordHelpBlock" class="form-text ">


</form>

<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" onclick="ngh()" id="log">ورود</button>
  </div>
<script src="login.js"></script> 
</div> -->


 <section id="d6">
<form  name="login" action="login2.php" method="post">
   <div id="vasat5" class="card col-4 shadow">
    <div class="m-1 row">
    <label id="fotbal5">نام کاربری</label>
     <input type="text" id="username" name="a" class="col-5">
    
     
     <label id="fotbal5">رمز</label>
     <input type="password" id="pasword" name="b"class="col-5">
    
   
     <label id="fotbal5">تکرار رمز</label>
     <input type="password" id="repasword" name="c"class="col-5">


     <label id="fotbal5">ایمیل</label>
     <input type="email" id="u" name="u"class="col-5">
     </div>
     
</form>
<div class="col-3">
<button onclick="ngh()" id="log" class="m-1 card shadow">ثبت نام</button> 
<script src="login.js"></script>  
</div>
</div>


<?php
include("footer.html");
?>
  