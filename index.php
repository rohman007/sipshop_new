

<?php include "header.php" ?>
<body>
    
  <?php include "navbar.php" ?>

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

  
  <?php include "footer.php" ?>  
  <?php include "footer-script.php" ?>
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
      $('body').click(function (e) {
        if ($(e.target).is($("#listProduk"))) {
            
        } else {
            $('#listProduk').html("")
        }
      })
      $('#searchProd').keyup(function(){
          // $('#dropdownData').dropdown()
          $('#loading').show();
          var searchProd = $('#searchProd').val();
          console.log(searchProd)
          if(searchProd != ""){
              $.ajax({
                  url: "search-list.php?search=" + $('#searchProd').val(),
                  type: "GET",
                  dataType: "html",
                  success: function (data) {  
                      console.log(data);  
                      $('#loading').hide();
                      $('#listProduk').html(data);
                  },
                  error: function (xhr, status) {
                  },
                  complete: function (xhr, status) {
                  }
              });
          }else{
              $('#listProduk').html("")
          }
      });
    })
  </script>
</body>

</html>