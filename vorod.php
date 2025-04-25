<?php
include("header.php");
?>
<section id="d6" class="col-10 list-inline m-2 card shadow ">




<div class="col-6 m-5">
   <div class="mb-5">
  <label for="exampleFormControlInput1" class="form-label">نام کاربری</label>
  <input type="email" class="form-control" id="name" placeholder="-------">
</div>


<label for="inputPassword5" class="form-label">رمز</label>
<input type="password" id="inputPassword5" class="form-control " aria-describedby="***********">


<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" onclick="ngh()" id="log">ورود</button>
  </div>
<script src="login.js"></script>
<?php
include("footer.html");
?>