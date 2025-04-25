
<?php
session_start();
?>

<!DOCTYPE html >
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body{font-style: unset;}
    </style>
</head>
<body class=" ">
    <div id="asl">
   <header class="">
    <div class="m-1" >
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse shadow " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active card m-1 shadow" aria-current="page" href="index.php">خانه</a>
              </li>
             
              
              <li class="nav-item">
                <a class="nav-link active  card m-1 shadow" aria-current="page" href="s.php">سبد خرید</a>
              </li>
              <?php if(isset($_SESSION["login"])){ ?>
              <li  class="nav-item">
                <a class="nav-link active  card m-1 shadow" aria-current="page" href="logout.php">خروج</a>
              </li>
              <?php }else{ ?>

                <li class="nav-item">
                <a class="nav-link active card m-1 shadow" aria-current="page" href="login.php">ثبت نام</a>
                </li>
              <li  class="nav-item">
                <a class="nav-link active  card m-1 shadow" aria-current="page" href="lo2.php">ورود</a>
              </li>
              <?php } ?>
              


              <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
                <li class="nav-item">
                <a class="nav-link active  card m-1 shadow" aria-current="page" href="admin.php">مدیریت</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active card m-1 shadow" aria-current="page" href="new.php">+</a>
              </li>
            
            <?php }else{ ?>
            <?php } ?>


            <!-- <?php if(isset($_SESSION["login"])){ ?>
                <li class="col-12 col-md h6"><a class="text-muted" href="logout.php">خروج</a></li>
            <?php }else{ ?>
            <li class="col-12 col-md h6"><a class="text-muted" href="login.php">ورود</a></li>
            <?php } ?> -->



            
            </ul>
            <form class="d-flex shadow" role="search">
              <input class="form-control me-2 shadow" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
          </div>
        </div>
      </nav>
</header>

   <main id="div2" class="container align-items-start justify-content-evenly col-12">
    
    <div class="container">
        
        
       
   