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
  <link rel="stylesheet" href="./css/dataTables.bootstrap4.min.css">
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
  <div class="container-fluid" id="content">
    <div class="row">
      <div class="col-1.5">
        <h1 id="location" class="text-center text-white">請選擇區域</h1>
        <div>
          <?php include("map.php"); ?>
        </div>
      </div>
      <div class="col text-white" id="table">
      </div>
    </div>
  </div>
  <div class="container-fluid" id="loading">
    <div class="row h-100">
      <div class="col-12 align-self-center text-center">
        <img src="./images/loading.svg" alt="">
      </div>
    </div>
  </div>
  

  <script src="./js/jquery-3.4.1.min.js"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/wow.min.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap4.min.js"></script>
  <script>
      $("path").on("click",function(){
        $("path").removeClass("click");
        $(this).addClass("click");
        $("#location").html($(this).attr("id"));
          let sarea = $(this).attr("id");
          $.post("./api/content.php",{sarea},function(res){
            $("#table").html(res);
            $(".addr").DataTable({
            // 改成中文 要用伺服器開才會正常顯示
            language: {
              url: './datatables-chinese.json'
            },
          
            // 將詳細資料的排序&搜尋關閉
            columnDefs: [
              {
                  targets: 4,
                  orderable: false,
                  searchable: false
              }
            ]
            })
          })
      })
      
  </script>
</body>

</html>