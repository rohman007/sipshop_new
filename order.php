
<?php include "header.php" ?>
<body>
  <?php include "navbar-login.php" ?>

  <main id="main" class="position-relative">
  
    <!-- ======= Hero Section ======= -->
    <section id="history-page" class="section py-4">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-3 d-none d-sm-block menu-loggedin" style="width:20%">
            <?php include "sidebar-login.php" ?>           
          </div>
          <div class="col-12 col-sm-9" style="width:80%">
            <div class="rounded-4 bg-blackgrey text-white py-sm-3 px-sm-4  pb-1">
              <div class="nav-history d-flex align-items-center px-3 py-3 px-md-2 py-md-4 pt-3">
                <a href="history.php" class=" py-2 fw-500 px-3 me-2">Riwayat</a>
                <a href="order.php" class="active py-2 fw-500 px-3 me-2">Order</a>
              </div>
              <div class="report-search rounded-3 py-3 px-3 px-md-4 py-md-4 border-0">
                <div class="row">
                  <div class="col-12 mb-3">
                    <label class="fw-500 mb-1 ps-md-3 ps-1">Pilih Produk</label>
                    <select class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" id="selectProduct">
                      <option selected="" readonly="" disabled="">Pilih Produk</option>
                      <option value="genshin-impact">Genshin Impact</option>
                      <option value="amazon-prime-video">Amazon Prime Video</option>
                      <option value="pubg-mobile">PUBG Mobile</option>
                      <option value="disney-hotstar">Disney Hotstar</option>
                      <option value="luna-online-new-world">Luna Online New World</option>
                      <option value="revelation-:-infinite-journey">Revelation : Infinite Journey</option>
                      <option value="vidio-premier">Vidio Premier</option>
                      <option value="viu-premium">Viu Premium</option>
                      <option value="wetv-premium">WeTV Premium</option>
                      <option value="axis">Axis</option>
                      <option value="youtube-premium">Youtube Premium</option>
                      <option value="never-after">Never After</option>
                      <option value="by-u">By U</option>
                      <option value="idle-legends-:-gods-saga">Idle Legends : GODS SAGA</option>
                      <option value="one-punch-man-:-the-strongest">One Punch Man : The Strongest</option>
                      <option value="project-entropy">Project Entropy</option>
                      <option value="rise-of-kingdom">Rise of Kingdom</option>
                      <option value="marvel-snap">Marvel Snap</option>
                      <option value="omega-legends">Omega Legends</option>
                      <option value="jade-legends">Jade Legends</option>
                      <option value="mirage-:-perfect-skyline">Mirage : Perfect Skyline</option>
                      <option value="super-sus">Super SUS</option>
                      <option value="hay-day">Hay Day</option>
                      <option value="conquer-online">Conquer Online</option>
                      <option value="football-master-2">Football Master 2</option>
                      <option value="three">Three</option>
                      <option value="telkomsel">Telkomsel</option>
                      <option value="smartfren">Smartfren</option>
                      <option value="xl">XL</option>
                      <option value="goddess-of-victory:-nikke">Goddess of Victory: Nikke</option>
                      <option value="dunk-city-dynasty">Dunk City Dynasty</option>
                      <option value="valorant">Valorant</option>
                      <option value="eudemons-online">Eudemons Online</option>
                      <option value="token-listrik-pln">Token Listrik PLN</option>
                      <option value="clash-royale">Clash Royale</option>
                      <option value="clash-of-clans">Clash of Clans</option>
                      <option value="brawl-stars">Brawl Stars</option>
                      <option value="heroes-evolved">Heroes Evolved</option>
                      <option value="bleach-mobile-3d">BLEACH Mobile 3D</option>
                      <option value="echocalypse">Echocalypse</option>
                      <option value="light-of-thel-:-new-era">Light of Thel : New Era</option>
                      <option value="ensemble-stars-music">Ensemble Stars Music</option>
                      <option value="laplace-m">Laplace M</option>
                      <option value="sky:-children-of-the-light">Sky: Children of the Light</option>
                      <option value="state-of-survival:-zombie-war">State of Survival: Zombie War</option>
                      <option value="miko-era-:-twelve-myths">Miko Era : Twelve Myths</option>
                      <option value="call-of-duty-mobile">Call of Duty Mobile</option>
                      <option value="free-fire">Free Fire</option>
                      <option value="marvel-super-war">MARVEL Super War</option>
                      <option value="arena-of-valor">Arena of Valor</option>
                      <option value="ragnarok-m-eternal-love">Ragnarok M : Eternal Love</option>
                      <option value="mobile-legends">Mobile Legends</option>
                      <option value="metal-slug-awakening">Metal Slug : Awakening</option>
                    </select>
                  </div>
                  <div class="col-9 col-md-6">
                    <label class="fw-500 mb-1 ps-md-3 ps-1">Search</label>
                    <div class="input-group me-3 search-bar" aria-haspopup="true" id="dropsearchdown">
                      <input type="text" name="query" placeholder="Search" id="searchProd" class="form-control search-form rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" autocomplete="off">
                      <button type="submit" class="btn btn-warning position-absolute" id="btnSearchProds">
                          <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-12 mt-4">
                    <div id="isi_ulang_instan_container" class="row g-3">
                      <div id="0_isiulanginstan" class="col-6 col-lg-4 option-list position-relative">
                        <input type="radio" name="product_code" class="product" id="productid-0" value="0" data-nominal="1.431" data-name="5 (5+0) Diamonds" data-type="diamond">
                        <label for="productid-0" class="position-absolute w-100 h-100 top-0 start-0"></label>
                        <div class="position-relative rounded-3 gap-3 py-2 mt-2 d-flex justify-content-between align-items-center">
                          <div>
                            <p class="text-sm">5 (5+0) Diamonds</p>
                            <p class="py-1">Rp. 1.431,-</p>
                          </div>
                          <img src="images/diamond.png">
                          <div class="position-absolute top-0 check-icon" style="">
                              <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                          </div>
                        </div>
                      </div>
                      <div id="1_isiulanginstan" class="col-6 col-lg-4 option-list position-relative">
                        <input type="radio" name="product_code" class="product" id="productid-1" value="0" data-nominal="3.333" data-name="12 (11+1) Diamonds" data-type="diamond">
                        <label for="productid-1" class="position-absolute w-100 h-100 top-0 start-0"></label>
                        <div class="position-relative rounded-3 gap-3 py-2 mt-2 d-flex justify-content-between align-items-center">
                          <div>
                            <p class="text-sm">12 (11+1) Diamonds</p>
                            <p class="py-1">Rp. 3.333,-</p>
                          </div>
                          <img src="images/diamond.png">
                          <div class="position-absolute top-0 check-icon" style="">
                              <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                          </div>
                        </div>
                      </div>
                      <div id="3_isiulanginstan" class="col-6 col-lg-4 option-list position-relative">
                        <input type="radio" name="product_code" class="product" id="productid-3" value="0" data-nominal="3.244" data-name="14 (13+11) Diamonds" data-type="diamond">
                        <label for="productid-3" class="position-absolute w-100 h-100 top-0 start-0"></label>
                        <div class="position-relative rounded-3 gap-3 py-2 mt-2 d-flex justify-content-between align-items-center">
                          <div>
                            <p class="text-sm">14 (13+1) Diamonds</p>
                            <p class="py-1">Rp. 3.244,-</p>
                          </div>
                          <img src="images/diamond.png">
                          <div class="position-absolute top-0 check-icon" style="">
                              <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                          </div>
                        </div>
                      </div>
                      <div id="4_isiulanginstan" class="col-6 col-lg-4 option-list position-relative">
                        <input type="radio" name="product_code" class="product" id="productid-4" value="0" data-nominal="5.236" data-name="19 (17+2) Diamonds" data-type="diamond">
                        <label for="productid-4" class="position-absolute w-100 h-100 top-0 start-0"></label>
                        <div class="position-relative rounded-3 gap-3 py-2 mt-2 d-flex justify-content-between align-items-center">
                          <div>
                            <p class="text-sm">19 (17+2) Diamonds</p>
                            <p class="py-1">Rp. 5.236,-</p>
                          </div>
                          <img src="images/diamond.png">
                          <div class="position-absolute top-0 check-icon" style="">
                              <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                          </div>
                        </div>
                      </div>
                      <div id="5_isiulanginstan" class="col-6 col-lg-4 option-list position-relative">
                        <input type="radio" name="product_code" class="product" id="productid-5" value="0" data-nominal="6.487" data-name="28 (26+2) Diamonds" data-type="diamond">
                        <label for="productid-5" class="position-absolute w-100 h-100 top-0 start-0"></label>
                        <div class="position-relative rounded-3 gap-3 py-2 mt-2 d-flex justify-content-between align-items-center">
                          <div>
                            <p class="text-sm">28 (26+2) Diamonds</p>
                            <p class="py-1">Rp. 6.487,-</p>
                          </div>
                          <img src="images/diamond.png">
                          <div class="position-absolute top-0 check-icon" style="">
                              <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                          </div>
                        </div>
                      </div>
                      <div id="6_isiulanginstan" class="col-6 col-lg-4 option-list position-relative">
                        <input type="radio" name="product_code" class="product" id="productid-6" value="0" data-nominal="9.731" data-name="42 (38+4) Diamonds" data-type="diamond">
                        <label for="productid-6" class="position-absolute w-100 h-100 top-0 start-0"></label>
                        <div class="position-relative rounded-3 gap-3 py-2 mt-2 d-flex justify-content-between align-items-center">
                          <div>
                            <p class="text-sm">42 (38+4) Diamonds</p>
                            <p class="py-1">Rp. 9.731,-</p>
                          </div>
                          <img src="images/diamond.png">
                          <div class="position-absolute top-0 check-icon" style="">
                              <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-between mt-4 text-sm mb-md-3 mb-3 data-show pt-3">
                      <div class="col-12 col-sm-6 fw-500 mb-3 mb-md-0">Menampilkan 6 sampai 10 dari 6 hasil</div>
                      <div class="col-12 col-sm-auto">
                      <a class="bg-grey text-white px-3 py-2 rounded-2 text-sm d-inline-block fw-500 mx-1 text-decoration-none">Sebelumnya</a>
                      <a class="bg-grey text-white px-3 py-2 rounded-2 text-sm d-inline-block fw-500 mx-1 text-decoration-none">Selanjutnya</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Section -->
  </main><!-- End #main -->

  <style>
    div#list-order_length {
      display: none;
    }
  </style>
  <?php include "footer.php" ?>  
  <?php include "footer-script.php" ?>
  <script>
    $(document).ready(function() {
      $('#transaksi-sidebar').addClass("active");
      // new DataTable('#list-order');
      $('#list-order').dataTable({
        searching: false, 
        language: {
          url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json',
        },
      });

    });
  </script>

</body>

</html>