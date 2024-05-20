<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TMW | STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/font.css">
  </head>
  <body>
    <?php require 'page/navbar.php'; ?>

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

    <!-- Content Popular Games -->
    <div class="container-fluid py-3" style="background-color: #b29dca">
        <div class="container text-white">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Popular <span class="text-warning"> Games</span></h1>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-2 offset-lg-3 mt-4  col-sm-4 col-4">
                  <div class="wrapper">
                    <img src="asset/img/game/mobile-legend.png" style="height: 170px; width:100%; border-radius: 12px;" >
                  </div>
                </div>
                <div class="col-lg-2 mt-4 col-sm-4 col-4">
                  <div class="wrapper">
                    <img src="asset/img/game/free-fire-logo.jpg" class="img-fluid" style="height: 170px; width:100%; border-radius: 12px;" >
                  </div>
                </div>
                <div class="col-lg-2 mt-4 col-sm-4 col-4">
                  <div class="wrapper">
                    <img src="asset/img/game/pubg.png" class="img-fluid" style="height: 170px; width:100%; border-radius: 12px;" >
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content popular games -->

    <!-- Content Top Up all Games -->
    <div class="container-fluid py-5" style="background-color: #b29dca">
        <div class="container text-white">
            <div class="row">
                <div class="col-12  text-center">
                    <h1>Top Up All <span class="text-warning">Games</span></h1>
                    <p class="text-secondary">Cari game kesayangan mu!</p>
                </div>
                <div class="col-12">
                    <form class="form-inline">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-append">
                            <button class="btn btn-warning" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row mt-3 text-center">
                <div class="col-lg-2 col-sm-4 col-4 mt-4">
                    <img src="asset/img/game/mobile-legend.png" style="height: 170px; width:100%; border-radius: 12px;" >
                    <h5 class="mt-2">Mobile Legends</h5>
                    <a href="page/mobile_legend.php" class="btn btn-warning"><i class="bi bi-cart"></i> Order</a>
                </div>
                <div class="col-lg-2 col-sm-4 col-4 mt-4">
                    <img src="asset/img/game/free-fire-logo.jpg" class="img-fluid" style="height: 170px; width:100%; border-radius: 12px;" >
                    <h5 class="mt-2">Free Fire</h5>
                    <a href="page/free-fire.php" class="btn btn-warning"><i class="bi bi-cart"></i> Order</a>
                </div>
                <div class="col-lg-2 col-sm-4 col-4 mt-4">
                    <img src="asset/img/game/pubg.png" class="img-fluid" style="height: 170px; width:100%; border-radius: 12px;" >
                    <h5 class="mt-2">Pubg Mobile</h5>
                    <a href="page/pubg.php" class="btn btn-warning"><i class="bi bi-cart"></i> Order</a>
                </div>
                <div class="col-lg-2 col-sm-4 col-4 mt-4">
                    <img src="asset/img/game/valorant.webp" class="img-fluid" style="height: 170px; width:100%; border-radius: 12px;" >
                    <h5 class="mt-2">Valorant</h5>
                    <a href="page/valorant.php" class="btn btn-warning"><i class="bi bi-cart"></i> Order</a>
                </div>
                <div class="col-lg-2 col-sm-4 col-4 mt-4">
                    <img src="asset/img/game/call-of-duty.jpeg" class="img-fluid" style="height: 170px; width:100%; border-radius: 12px;" >
                    <h5 class="mt-2">Call Of Duty</h5>
                    <a href="page/call_of_duty.php" class="btn btn-warning"><i class="bi bi-cart"></i> Order</a>
                </div>
                <div class="col-lg-2 col-sm-4 col-4 mt-4">
                    <img src="asset/img/game/genshin.webp" class="img-fluid" style="height: 170px; width:100%; border-radius: 12px;" >
                    <h5 class="mt-2">Genshin Impact</h5>
                    <a href="page/genshin_impact.php" class="btn btn-warning"><i class="bi bi-cart"></i> Order</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content top up all games -->

    <!-- Footer -->
    <footer>
        <div class="container-fluid text-white p-4" style="background-color: #60478d">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                      <h5 class="text-uppercase">About Us</h5>
                      <p>
                        TMW Website Top-Up Termurah, Tercepat & Terpercaya di Indonesia. Metode Pembayaran Lengkap, Instant Proses, Tersedia Banyak Game Populer Seperti Mobile Legends, PUBG Mobile, Valorant, Free Fire, Genshin Impact, Apex Legends Mobile, dan Berbagai Game Lainnya yang Tidak Kalah Seru Untuk Dimainkan.
                      </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                      <h5 class="text-uppercase">Links</h5>
                      <ul class="list-unstyled mb-0">
                        <li><a href="#!" class="text-warning">Home</a></li>
                        <li><a href="#!" class="text-warning">Link 2</a></li>
                        <li><a href="#!" class="text-warning">Link 3</a></li>
                        <li><a href="#!" class="text-warning">Link 4</a></li>
                      </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                      <h5 class="text-uppercase">Contact</h5>
                      <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-geo-alt-fill"></i> Jl Sarijadi Raya, Bandung, Indonesia</li>
                        <li><i class="bi bi-telephone-fill"></i> +62 851 5699 4409</li>
                        <li><i class="bi bi-envelope-fill"></i> tmwstore@gmail.com</li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center p-3 text-white" style="background-color: #402d61">
          © 2024 TMW Store . All Rights Reserved
        </div>
    </footer>
    <!-- End footer -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>