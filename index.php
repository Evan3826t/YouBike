<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/animate.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/fontawesome.all.min.css">
  <link rel="stylesheet" href="./css/all.css">
  <link rel="short icon" href="./images/bike_icon.ico" type="image/x-icon">
  <title>YouBike</title>
  <!-- Primary Meta Tags -->
  <title>YouBike</title>
  <meta name="title" content="YouBike">
  <meta name="description" content="YouBike 介紹">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://metatags.io/">
  <meta property="og:title" content="YouBike">
  <meta property="og:description" content="YouBike 介紹">
  <meta property="og:image" content="./images/bg.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://metatags.io/">
  <meta property="twitter:title" content="YouBike">
  <meta property="twitter:description" content="YouBike 介紹">
  <meta property="twitter:image" content="./images/bg.jpg">
</head>
<?php 

include ("base.php");
if(empty($_SESSION['save'])){
  include ("repo.php");
}

?>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
      <div class="navbar-brand">YouBike</div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="location.php">Location</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid" id="loading">
    <div class="row h-100">
      <div class="col-12 align-self-center text-center">
        <img src="./images/loading.svg" alt="">
      </div>
    </div>
  </div>
  <div class="container" id="content">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="col-12 my-3">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/img01.jpg" class="d-block h-80 w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/img02.jpg" class="d-block h-80 w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/img03.jpg" class="d-block h-80 w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="text-dark" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="text-dark" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="sr-only text-dark">Next</span>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-12 my-3">
        <h1 class="text-center text-white">微笑單車介紹</h1>
        <hr class="bg-white">
      </div>
    </div>
    <div class="row text">
      <div class="col-12 col-md-5 my-3 zoomInLeft wow">
        <a href="https://taipei.youbike.com.tw/login"><img src="./images/textimg01.jpg" class="w-100 h-100 object-fit"></a>
      </div>
      <div class="col-12 col-md-7 my-3 text-white align-self-center">
        <h1>公共自行車傷害險</h1>
        <p>YouBike 會員完成【 加保資料登錄 】，即可免費享有公共自行車傷害險。<br>
          保險登錄後，於 YouBike 服務之縣市租借皆享有保障。
        </p>
      </div>
    </div>
    <div class="row text">
      <div class="col-12 col-md-5 my-3 zoomInRight wow">
        <img src="./images/textimg02.jpg" class="w-100 h-100 object-fit">
      </div>
      <div class="col-12 col-md-7 my-3 text-white  align-self-center">
        <h1>YouBike 2.0</h1>
        <p>微笑單車公司日前也提出升級版「YouBike2.0」計畫，並在台大公館校區、水源校區進行試營運。
          YouBike2.0車柱輕量化，採太陽能供電設計與現行YouBike1.0不相容，不過因北市府簽訂契約條件設定的關係，未來無法與鄰近北市的新北、桃園的YouBike站點互通借還車。
        </p>
      </div>
    </div>
    <div class="row text">
      <div class="col-12 col-md-5 my-3 zoomInLeft wow">
        <img src="./images/textimg03.PNG" class="w-100 h-100 object-fit">
      </div>
      <div class="col-12 col-md-7 my-3 text-white align-self-center">
        <h1>嚴禁雙載</h1>
        <p>自行車不可雙載，經畫面認定已屬違規行為，若依《道路交通處罰條例》警方可處3百至6百元罰款，另Youbike的使用規則也已違規，可記1點處分，只要檢舉人提供相關事證及車號，就可對違規會員記點。
        </p>
      </div>
    </div>
  </div>
  
  <div class="container-fluid bg-warning text-dark text-center" id="footer">
    <div class="row">
      <div class="col-12">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link text-dark" href="https://zh-tw.facebook.com/youbiketaipei"><i class="fab fa-facebook-square"></i></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-dark" href="https://www.youbike.com.tw/"><i class="fas fa-globe"></i></a>
          </li>
        </ul>
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>微笑單車
      </div>
    </div>
  </div>

  <script src="./js/jquery-3.4.1.min.js"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/wow.min.js"></script>
  <script>
  </script>
</body>

</html>