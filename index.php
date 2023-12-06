
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SipShop - Situs Top Up Game Termurah Se Indonesia</title>
  <meta name="description" content="Situs Top Up Game Termurah Se Indonesia | Flash Sale Setiap Hari | Garansi Termurah | Proses Cepat | Aman dan Terpercaya.">
  <meta property="og:description" content="Situs Top Up Game Termurah Se Indonesia | Flash Sale Setiap Hari | Garansi Termurah | Proses Cepat | Aman dan Terpercaya.">

  <!-- Favicons -->
  <link href="images/favicon.png" rel="icon">

  <!--====== Font Google ======-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="css/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="css/owlcarousel/owl.theme.default.min.css" rel="stylesheet">

  <link href="css/style.css?v=11111" rel="stylesheet">

  <!-- JS Files -->
  <script src="js/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="js/owl.carousel.js"></script>
</head>
<body>
    <header id="header">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container d-flex">
          <div class="d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
              <img src="images/logo.png">
            </a>
          </div>
          <div class="background-layer"></div>
          <div class="d-flex align-items-center">
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <a class="navbar-brand d-sm-none" href="#">
                <img src="images/logo.png">
              </a>
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-home " aria-hidden="true"></i> Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i> Cek Pesanan</a>
                </li>
              </ul>
            </div>
            <div class="rounded-5 align-items-center login-action-button d-flex justify-content-around ms-4" >
              <a href="login.php" style="">Login</a>
              <span>|</span>
              <a href="register.php">Register</a>
            </div>
          </div>
        </div>
      </nav>
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

      <div class="container">
        <div class="row">
          <div class="col-12">
            <div id="hero-slide" class="owl-carousel owl-theme">
              <div class="item">
                <img src="images/slide-1.jpg" class="w-100">
              </div>
              <div class="item">
                <img src="images/slide-2.jpg" class="w-100">
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Hero -->

  <main id="main" class="position-relative">
  
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="d-sm-flex align-items-center justify-content-between">
              </div>            
          </div>
        </div>
      </div>
    </section><!-- End Hero Section -->

    <!-- ======= Content Section ======= -->
    <section id="list-voucher" class="section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-md-6">
            <form method="GET" action="/search">
                <div class="input-group me-3 search-bar" aria-haspopup="true" id="dropsearchdown">
                    <input type="text" name="query" placeholder="Cari game, voucher, pulsa, dll..." id="searchProd" class="form-control search-form" autocomplete="off">
                    <button type="submit" class="btn btn-warning" id="btnSearchProds">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div id="listProduk"></div>
            </form>
          </div>
          <div class="col-12">
            <ul class="nav nav-tabs justify-content-center mt-4 border-0" id="catalogTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="mobilegame-tab" data-bs-toggle="tab" data-bs-target="#mobilegame" type="button" role="tab" aria-controls="mobilegame" aria-selected="true">Mobile Game</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="gamepc-tab" data-bs-toggle="tab" data-bs-target="#gamepc" type="button" role="tab" aria-controls="gamepc" aria-selected="false">Game PC</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pulsadata-tab" data-bs-toggle="tab" data-bs-target="#pulsadata" type="button" role="tab" aria-controls="pulsadata" aria-selected="false">Pulsa & Data</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="voucher-tab" data-bs-toggle="tab" data-bs-target="#voucher" type="button" role="tab" aria-controls="voucher" aria-selected="false">Voucher</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="lainnya-tab" data-bs-toggle="tab" data-bs-target="#lainnya" type="button" role="tab" aria-controls="lainnya" aria-selected="false">Lainnya</button>
            </li>
          </ul>
          <div class="tab-content" id="catalogTabContent">
            <div class="tab-pane fade show active" id="mobilegame" role="tabpanel" aria-labelledby="mobilegame-tab">
              <h2 class=" px-md-5">Semua list game mobile</h2>
              <div class="row px-md-5 gx-5 gy-2">
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Mobile Legends.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/LOL.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Free Fire Max.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/AOV.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Free Fire.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ace Racer.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Sausage man.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ragnarok M.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ragnarok X.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Super Sus.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/PUBG MOBILE.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Gensin Impact.jpg" class="w-100">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="gamepc" role="tabpanel" aria-labelledby="gamepc-tab">
              <h2 class=" px-md-5">Semua list game PC</h2>
              <div class="row px-md-5 gx-5 gy-2">
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Mobile Legends.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/LOL.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Free Fire Max.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/AOV.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Free Fire.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ace Racer.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Sausage man.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ragnarok M.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ragnarok X.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Super Sus.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/PUBG MOBILE.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Gensin Impact.jpg" class="w-100">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pulsadata" role="tabpanel" aria-labelledby="pulsadata-tab">
              <h2 class=" px-md-5">Semua list pulsa & data</h2>
              <div class="row px-md-5 gx-5 gy-2">
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Mobile Legends.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/LOL.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Free Fire Max.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/AOV.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Free Fire.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ace Racer.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Sausage man.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ragnarok M.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ragnarok X.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Super Sus.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/PUBG MOBILE.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Gensin Impact.jpg" class="w-100">
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="voucher" role="tabpanel" aria-labelledby="voucher-tab">
              <h2 class=" px-md-5">Semua list voucher</h2>
              <div class="row px-md-5 gx-5 gy-2">
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Mobile Legends.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/LOL.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Free Fire Max.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/AOV.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Free Fire.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ace Racer.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Sausage man.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ragnarok M.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ragnarok X.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Super Sus.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/PUBG MOBILE.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Gensin Impact.jpg" class="w-100">
                  </a>
                </div>
              </div></div>
            <div class="tab-pane fade" id="lainnya" role="tabpanel" aria-labelledby="lainnya-tab">
              <h2 class=" px-md-5">Semua list lainnya</h2>
              <div class="row px-md-5 gx-5 gy-2">
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Mobile Legends.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/LOL.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Free Fire Max.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/AOV.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Free Fire.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ace Racer.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Sausage man.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ragnarok M.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Ragnarok X.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Super Sus.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/PUBG MOBILE.jpg" class="w-100">
                  </a>
                </div>
                <div class="col-4 col-sm-2">
                  <a href="product-detail.php">
                    <img src="images/Gensin Impact.jpg" class="w-100">
                  </a>
                </div>
              </div></div>
          </div>
          </div>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-2">
                <a href="product-detail.php">
                  <img src="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container footer-bottom clearfix">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6 pe-md-5">
          <img src="images/logo_2x.png" class="footer-logo">
          <p style="">SIPSHOP adalah situs top up game termurah se indonesia flash sale setiap hari, garansi termurah, proses cepat, aman dan terpercaya.</p>
        </div>
        <div class="col-12 col-lg-6 mb-3">
          <div class="d-flex justify-content-lg-start justify-content-between mt-4 gap-4 mb-4 pb-3">
            <div class="w-50">
              <h3 class="text-start">INFORMASI</h3>
              <p class="text-nowrap mb-2"><a href="#">Tipe Akun SipShop</a></p>
              <p class="text-nowrap mb-2"><a href="login.php">Login</a></p>
              <p class="text-nowrap mb-2"><a href="register.php">Register</a></p>
              <p class="text-nowrap mb-2"><a href="#">Info dan klaim garansi</a></p>
            </div>
            <div class="w-50">
              <h3 class="text-start">SOCIAL MEDIA</h3>
              <div class="d-flex gap-2 mt-2 list-social">
                <a class="rounded-5" href="#">
                  <i class="fa fa-instagram rounded-5"></i>
                </a>
                <a class="rounded-5" href="#">
                  <i class="fa fa-whatsapp rounded-5"></i>
                </a>
                <a class="rounded-5" href="#">
                  <i class="fa fa-youtube-play rounded-5"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="mt-2">
            <h3 class="text-start">METODE PEMBAYARAN</h3>
            <div class="d-flex flex-wrap gap-2 mt-1 payment-methode">
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/bca.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/qris.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/bri.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/mandiri.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/bni.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/bsi.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/cimb.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/alfamart.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/alfamidi.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/indomaret.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/lawson.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/gopay.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/ovo.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/dana.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/linkaja.png" alt="">
              </div>
              <div class="p-1 bg-white">
                <img style="height: 25px; width: auto;" src="images/payments/shopeepay.png" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="copyright col-12 mx-auto border-top border-white py-1 pt-3 align-self-end mt-4">
          <p class="text-white text-center">Copyright @2023 SipShop - Situs Top Up Game
            Termurah Se Indonesia</p>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->


  <!-- Template Main JS File -->
  <script>
    $(document).ready(function() {
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        responsiveClass: true,
        items: 1,
        responsive : {
            // breakpoint from 0 up
            0 : {
              stagePadding: 0,
              nav: false,
            },
            // breakpoint from 768 up
            768 : {
              stagePadding: 150,
              nav: true,
            }
        }
      })
      $('.navbar-toggler').click(function() {
          $('body').addClass("menu-active");
      });
      $('.background-layer').click(function() {
          $('body').removeClass("menu-active");
          $('.navbar-collapse').removeClass("show");
      });
    })
  </script>
</body>

</html>