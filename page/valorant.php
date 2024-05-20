<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile Legend</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/font.css">

    <link rel="stylesheet" href="css/responsive.css">
  </head>
  <body>
    <?php require 'navbar.php'; ?>

    <!-- Form top up -->
    <div class="container-fluid py-3" style="background-color: #b29dca">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12 col-12">
                    <div class="card w-100 text-white" style="width: 18rem; background-color:#342c41">
                        <img src="asset/img/game/valorant.webp" height="320px" class="card-img-top" alt="mobile legend">
                        <div class="card-body">
                          <h5>Mobile Legends</h5>
                          <small><span class="text-warning">Top Up Diamond Mobile Legends Resmi Moonton</span></small>
                          <p class="card-text">
                            1. Masukkan ID (Server) <br>
                            2. Pilih Nominal Diamond <br>
                            3. Pilih Metode Pembayaran <br>
                            4. Masukkan Nomor WhatsApp <br>
                            5. Klik Order Now & Lakukan Pembayaran <br>
                            6. Diamond akan masuk otomatis ke akun kamu</p>
                        </div>
                      </div>
                </div>

                <div class="col-lg-7 col-sm-12 col-12 mt-3">
                    <form action="">
                        <div class="card text-white" style="background-color: #342c41;">
                            <div class="card-header">
                            Lengkapi Data
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">User Id</label>
                                        <input type="number" class="form-control" id="inputEmail4" placeholder="Masukkan User Id kamu">
                                      </div>
                                      <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Server</label>
                                        <input type="number" class="form-control" id="inputPassword4" placeholder="Masukkan Id Server kamu">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card text-white mt-3" style="background-color: #342c41;">
                            <div class="card-header">
                            Pilih Nominal
                            </div>
                            <div class="card-body text-white">
                                <div class="row g-3">
                                    <div class="col-md-4 col-sm-12">
                                        <input type="radio" class="btn-check" name="nominal" id="option1" autocomplete="off">
                                        <label class="btn btn-outline-light col-12" for="option1">
                                          <div class="row">
                                            <div class="col-7 column-font">Starlight Pass Member</div>
                                            <div class="col-5 column-font"> <img src="https://cdn.kibrispdr.org/data/765/logo-starlight-ml-png-0.jpg" width="40px" height="20px" alt=""></div>
                                            <div class="col-12"><span class="text-warning">Rp. 130.000</span></div>
                                          </div>
                                        </label>
                                    </div>

                                    <div class="col-md-4 col-sm-12">
                                      <input type="radio" class="btn-check" name="nominal" id="option2" autocomplete="off">
                                      <label class="btn btn-outline-light col-12" for="option2">
                                        <div class="row">
                                          <div class="col-8 column-font">Weekly Diamond Pass </div>
                                          <div class="col-4 column-font"><img src="https://kaleoz-media.seagmcdn.com/kaleoz-store/202303/oss-f4e19c3646c87c918a22631cbb56860c.png!thumb_webp" width="40px" height="30px" alt=""></div>
                                          <div class="col-12"><span class="text-warning">Rp. 25.790</span></div>
                                        </div>
                                      </label>
                                    </div>

                                    <div class="col-md-4 col-sm-12">
                                      <input type="radio" class="btn-check" name="nominal" id="option3" autocomplete="off">
                                      <label class="btn btn-outline-light col-12" for="option3">
                                        <div class="row">
                                          <div class="col-7 column-font">86 (78+8) Diamonds</div>
                                          <div class="col-5 column-font"><img src="https://cdn.kibrispdr.org/data/80/diamond-mobile-legend-png-33.jpg" width="40px" height="30px" alt=""></div>
                                          <div class="col-12"><span class="text-warning">Rp. 19.000</span></div>
                                        </div>
                                      </label>
                                    </div>

                                    <div class="col-md-4 col-sm-12">
                                      <input type="radio" class="btn-check" name="nominal" id="option4" autocomplete="off">
                                      <label class="btn btn-outline-light col-12" for="option4">
                                        <div class="row">
                                          <div class="col-7 column-font">172 (156+16) Diamonds</div>
                                          <div class="col-5 column-font"><img src="https://cdn.kibrispdr.org/data/80/diamond-mobile-legend-png-33.jpg" width="40px" height="30px" alt=""></div>
                                          <div class="col-12"><span class="text-warning">Rp. 40.000</span></div>
                                        </div>
                                      </label>
                                    </div>

                                    <div class="col-md-4 col-sm-12">
                                      <input type="radio" class="btn-check" name="nominal" id="option5" autocomplete="off">
                                      <label class="btn btn-outline-light col-12" for="option5">
                                        <div class="row">
                                          <div class="col-7 column-font">257 (234+23) Diamonds</div>
                                          <div class="col-5 column-font"><img src="https://cdn.kibrispdr.org/data/80/diamond-mobile-legend-png-33.jpg" width="40px" height="30px" alt=""></div>
                                          <div class="col-12"><span class="text-warning">Rp. 58.710</span></div>
                                        </div>
                                      </label>
                                    </div>

                                    <div class="col-md-4">
                                      <input type="radio" class="btn-check" name="nominal" id="option6" autocomplete="off">
                                      <label class="btn btn-outline-light col-12" for="option6">
                                        <div class="row">
                                          <div class="col-7 column-font">344 (312+32) Diamonds</div>
                                          <div class="col-5 column-font"><img src="https://cdn.kibrispdr.org/data/80/diamond-mobile-legend-png-33.jpg" width="40px" height="30px" alt=""></div>
                                          <div class="col-12"><span class="text-warning">Rp. 78.080</span></div>
                                        </div>
                                      </label>
                                    </div>

                                    <div class="col-md-4">
                                      <input type="radio" class="btn-check" name="nominal" id="option7" autocomplete="off">
                                      <label class="btn btn-outline-light col-12" for="option7">
                                        <div class="row">
                                          <div class="col-7 column-font">429 (390+39) Diamonds</div>
                                          <div class="col-5 column-font"><img src="https://cdn.kibrispdr.org/data/80/diamond-mobile-legend-png-33.jpg" width="40px" height="30px" alt=""></div>
                                          <div class="col-12"><span class="text-warning">Rp. 97.750</span></div>
                                        </div>
                                      </label>
                                    </div>

                                    <div class="col-md-4">
                                      <input type="radio" class="btn-check" name="nominal" id="option8" autocomplete="off">
                                      <label class="btn btn-outline-light col-12" for="option8">
                                        <div class="row">
                                          <div class="col-7 column-font">516 (443+73) Diamonds</div>
                                          <div class="col-5 column-font"><img src="https://cdn.kibrispdr.org/data/80/diamond-mobile-legend-png-33.jpg" width="40px" height="30px" alt=""></div>
                                          <div class="col-12"><span class="text-warning">Rp. 120.000</span></div>
                                        </div>
                                      </label>
                                    </div>

                                    <div class="col-md-4">
                                      <input type="radio" class="btn-check" name="nominal" id="option9" autocomplete="off">
                                      <label class="btn btn-outline-light col-12" for="option9">
                                        <div class="row">
                                          <div class="col-7 column-font">600 (546+54) Diamonds</div>
                                          <div class="col-5 column-font"><img src="https://cdn.kibrispdr.org/data/80/diamond-mobile-legend-png-33.jpg" width="40px" height="30px" alt=""></div>
                                          <div class="col-12"><span class="text-warning">Rp. 137.100</span></div>
                                        </div>
                                      </label>
                                    </div>
                                    
                                    <div class="col-md-4">
                                      <input type="radio" class="btn-check" name="nominal" id="option10" autocomplete="off">
                                      <label class="btn btn-outline-light col-12" for="option10">
                                        <div class="row">
                                          <div class="col-7 column-font">1050 (937+113) Diamonds</div>
                                          <div class="col-5 column-font"><img src="https://img-cdn.jollymax.com/shoplay365/prod/upload/app-goods/256diamonds2021061007290426120210812035405753.png" width="40px" height="30px" alt=""></div>
                                          <div class="col-12"><span class="text-warning">Rp. 235.000</span></div>
                                        </div>
                                      </label>
                                    </div>

                                    <div class="col-md-4">
                                      <input type="radio" class="btn-check" name="nominal" id="option11" autocomplete="off">
                                      <label class="btn btn-outline-light col-12" for="option11">
                                        <div class="row">
                                          <div class="col-7 column-font">5532 (4649+883) Diamonds</div>
                                          <div class="col-5 column-font"><img src="https://img-cdn.jollymax.com/shoplay365/prod/upload/app-goods/256diamonds2021061007290426120210812035405753.png" width="40px" height="30px" alt=""></div>
                                          <div class="col-12"><span class="text-warning">Rp. 1.179.000</span></div>
                                        </div>
                                      </label>
                                    </div>

                                    <div class="col-md-4">
                                      <input type="radio" class="btn-check" name="nominal" id="option12" autocomplete="off">
                                      <label class="btn btn-outline-light col-12" for="option12">
                                        <div class="row">
                                          <div class="col-7 column-font">6000 (5110+990) Diamonds</div>
                                          <div class="col-5 column-font"><img src="https://img-cdn.jollymax.com/shoplay365/prod/upload/app-goods/256diamonds2021061007290426120210812035405753.png" width="40px" height="30px" alt=""></div>
                                          <div class="col-12"><span class="text-warning">Rp. 1.500.000</span></div>
                                        </div>
                                      </label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="card text-white mt-3" style="background-color: #342c41;">
                          <div class="card-header">
                          Pilih Metode Pembayaran
                          </div>
                          <div class="card-body text-white">
                            <div class="row g-3">
                              <h6>E- Wallet</h6>

                              <div class="col-md-3">
                                <input type="radio" class="btn-check" name="pembayaran" id="dana" autocomplete="off">
                                <label class="col-12 btn btn-outline-light" for="dana">
                                  <div class="row">
                                    <div class="col"><img src="asset/img/ewallet/dana.png" width="100px" height="70px" alt=""></div>
                                  </div>
                                </label>
                              </div>

                              <div class="col-md-3">
                                <input type="radio" class="btn-check" name="pembayaran" id="ovo" autocomplete="off">
                                <label class="col-12 btn btn-outline-light" for="ovo">
                                  <div class="row">
                                    <div class="col"><img src="asset/img/ewallet/ovo.png" width="100px" height="70px" alt=""></div>
                                  </div>
                                </label>
                              </div>

                              <div class="col-md-3">
                                <input type="radio" class="btn-check" name="pembayaran" id="gopay" autocomplete="off">
                                <label class="col-12 btn btn-outline-light" for="gopay">
                                  <div class="row">
                                    <div class="col"><img src="asset/img/ewallet/gopay.png" width="100px" height="70px" alt=""></div>
                                  </div>
                                </label>
                              </div>

                              <div class="col-md-3">
                                <input type="radio" class="btn-check" name="pembayaran" id="shopee" autocomplete="off">
                                <label class="col-12 btn btn-outline-light" for="shopee">
                                  <div class="row">
                                    <div class="col"><img src="asset/img/ewallet/shopeepay.png" width="100px" height="70px" alt=""></div>
                                  </div>
                                </label>
                              </div>

                              <h6>Bank Transfer</h6>

                              <div class="col-md-3">
                                <input type="radio" class="btn-check" name="pembayaran" id="bri" autocomplete="off">
                                <label class="col-12 btn btn-outline-light" for="bri">
                                  <div class="row">
                                    <div class="col"><img src="asset/img/bank/bri.png" width="100px" height="70px" alt=""></div>
                                  </div>
                                </label>
                              </div>

                              <div class="col-md-3">
                                <input type="radio" class="btn-check" name="pembayaran" id="mandiri" autocomplete="off">
                                <label class="col-12 btn btn-outline-light" for="mandiri">
                                  <div class="row">
                                    <div class="col"><img src="asset/img/bank/mandiri.png" width="100px" height="70px" alt=""></div>
                                  </div>
                                </label>
                              </div>

                              <div class="col-md-3">
                                <input type="radio" class="btn-check" name="pembayaran" id="bca" autocomplete="off">
                                <label class="col-12 btn btn-outline-light" for="bca">
                                  <div class="row">
                                    <div class="col"><img src="asset/img/bank/bca.png" width="100px" height="70px" alt=""></div>
                                  </div>
                                </label>
                              </div>

                              <h6>Pulsa</h6>

                              <div class="col-md-3">
                                <input type="radio" class="btn-check" name="pembayaran" id="telkomsel" autocomplete="off">
                                <label class="col-12 btn btn-outline-light" for="telkomsel">
                                  <div class="row">
                                    <div class="col"><img src="asset/img/pulsa/telkomsel.png" width="100px" height="70px" alt=""></div>
                                  </div>
                                </label>
                              </div>

                            </div>
                          </div>
                          
                      </div>

                        <div class="card text-white mt-3" style="background-color: #342c41;">
                            <div class="card-header">
                            Nomor Whatsapp
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">Nomor Whatsapp</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="08xxx -xxx -xxx">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-warning mt-3" onclick="order()"><i class="bi bi-cart"></i> Order</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End form top up -->

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
                        <li><a href="#!" class="text-dark">Link 1</a></li>
                        <li><a href="#!" class="text-dark">Link 2</a></li>
                        <li><a href="#!" class="text-dark">Link 3</a></li>
                        <li><a href="#!" class="text-dark">Link 4</a></li>
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
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<script>
  function order() {
    Swal.fire({
      title: 'Simpan perubahan?',
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: 'Save',
      denyButtonText: `Don't save`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        Swal.fire('Pembelian sedang di proses, tunggu!', '', 'success')
      } else if (result.isDenied) {
        Swal.fire('Terjadi Kesalahan pada proses pembelian', '', 'info')
      }
    });
  }
</script>
</html>















