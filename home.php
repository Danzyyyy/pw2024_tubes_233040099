<?php
require 'functions.php';
$games = query("SELECT * FROM games");

//sorting
if(isset($_POST["sort"])){
  if($_POST["sort"] === "old"){
  $games = query("SELECT * FROM games ORDER BY id ASC");
  }
  if($_POST["sort"] === "new"){
  $games = query("SELECT * FROM games ORDER BY id DESC");
  }
}
//akhir sorting
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font.css">
  </head>
  <body>
    <!-- Carousel banner event -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://blog.wallet-codes.com/wp-content/uploads/2019/08/Wallet-Codes_Mobile-Legends_Social-Media-Banner_Set-1_Blog.jpg" height="350px" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://blog.wallet-codes.com/wp-content/uploads/2020/07/Banner-1-800x395.jpg" height="350px" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.unipin.com/images/content_image_pages/1594783004-MA-200709-1_UniPin_SEO_banner_MLBB.jpg" height="350px" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Carousel banner event -->

    <!-- Search Games -->
    <div class="container-fluid py-5" style="background-color: #b29dca">
    <form action="" method="POST" class="mt-5">
            <select id="sort" name="sort" onchange="this.form.submit();">
               <?php if($_POST["sort"] === "old") : ?>
               <option value="new">NEW</option>
               <option value="old" selected>OLD</option>
               <?php else : ?>
               <option value="new" selected>NEW</option>
               <option value="old">OLD</option>
               <?php endif ; ?>
               </select>
            </form>
        <div class="container text-white">
            <div class="row">
                <div class="col-12  text-center">
                    <h1>Search <span class="text" style="color:#cc462b;">Games</span></h1>
                    <p class="text-secondary">Cari game kesayangan mu!</p>
                </div>
                <div class="col-12 form-container">
                  <form action="search.php" class="form-inline" method="POST"> 
                          <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search" id="keyword">
                            <div class="input-group-append">
                              <button class="btn" name="searchbt" type="button" style="background-color: #cc462b;">
                                  <i class="bi bi-search"></i>
                              </button>
                            </div>
                          </div>
                      </form> 
                  </div>
                </div>
              </div>
            <div class="row mt-3 text-center" id="container">
              <?php foreach ($games as $game) : ?>
                <div class="col-lg-2 col-sm-4 col-4 mt-4">
                    <img src="asset/img/game/<?= $game['image'] ?>" style="height: 170px; width:100%; border-radius: 12px;" >
                    <h2 class="mt-2"><?= $game['title']?></h2>
                    <a href="order_form.php?title=<?= $game['title'] ?>&price=<?= $game['price'] ?>" class="btn" style="background-color:#cc462b"><i class="bi bi-cart"></i>Browse</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- End Content top up all games -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/ajax.js"></script>
</html>