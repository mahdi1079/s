<?php
$id=$_POST["id"];
$name=$_POST["name"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fileName = trim($_POST["fileName"]);

    // جلوگیری از کاراکترهای نامعتبر
    $safeName = preg_replace("/[^a-zA-Z0-9_-]/", "", $fileName);

    // تعریف مسیر مشخص برای ذخیره فایل
    $baseDir = "C:/wamp64/www/l";  // مسیر خاص شما برای ذخیره فایل‌ها

    // اطمینان از اینکه پوشه 'l' وجود دارد
    if (!is_dir($baseDir)) {
        echo "پوشه مقصد وجود ندارد!";
        exit();
    }

    // افزودن پسوند php
    $fullFileName = $baseDir . "/" . $safeName . ".php";

    // محتوای پیش‌فرض داخل فایل جدید
    $defaultCode = <<<'PHP'
<?php
include("header.php");
$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"SELECT * FROM `mahsol` WHERE `id`=$id");
mysqli_close($a);
?>

<section>
<div class="container px-4 text-center row">
<?php
$row=mysqli_fetch_array($b);
while($row)
{
?>
<div id="carouselExampleDark" class="carousel carousel-dark slide card col-12 col-sm-11 col-md-9 col-lg-12 col-xl-6">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://dkstatics-public.digikala.com/digikala-products/be9ec432ddd1d0b4c486bac1387883fbfd18305b_1690097148.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo($row["img"]); ?> " class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://dkstatics-public.digikala.com/digikala-products/41cd421a43bc8277ff31e2d339baf7cdc2a01816_1690097145.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">قبلی</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">بعدی</span>
  </button>
</div>

<div class="scrollspy-example bg-body-tertiary p-3 rounded-2 col-12 col-sm-11 col-md-9 col-lg-12 col-xl-5 col-xxl-5 card m-1">
  <h4><?php echo($row["name"]); ?> - Playground</h4>
  <p>قیمت: 250,000 ریال</p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample">
    توضیحات بیشتر
  </button>
  <div class="collapse" id="collapseExample">
    <div class="card-body col-12">
      <ul class="list-group">
        <li class="list-group-item"><?php echo($row["tozihat"]); ?></li>
      </ul>
    </div>
  </div>
  <button type="button" class="btn btn-success float-end" id="l">خرید</button>
  <script src="l.php"></script>
</div>
<?php
$row=mysqli_fetch_array($b);
}
?>
</div>
</section>
<?php include("footer.html"); ?>
PHP;

    // نوشتن محتوای کد به داخل فایل
    file_put_contents($fullFileName, $defaultCode);

    echo "✅ فایل <strong>$fullFileName</strong> با موفقیت ساخته شد!";
}
?>

<!-- فرم ساده برای ساخت فایل -->

<?php
$safeNameWithPhp = $safeName . '.php';
$a=mysqli_connect("localhost","root","","mahsol");
$b=mysqli_query($a,"UPDATE `mahsol` SET `tozihat`='$name',`idd`='$safeNameWithPhp' WHERE `id`=$id;
");
mysqli_close($a);
?>
<?php
 if($b===true)
 {
    
 ?>
 
    <!-- <script>
    location.replace("admin.php");
 </script>    -->
  
 <?php

}else
echo("خطا");
?>
?>











