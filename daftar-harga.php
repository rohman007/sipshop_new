
<?php include "header.php" ?>
<body>
  <?php include "navbar-login.php" ?>

  <main id="main" class="position-relative">
  
    <!-- ======= Hero Section ======= -->
    <section id="history-page" class="section py-4">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="rounded-4 bg-blackgrey text-white py-sm-3 px-sm-5  pb-1">
              <div class="px-md-0 px-3 py-3 bb-1">
                <h2 class="fw-bold fs-4 mt-sm-3 pt-2 mt-md-2 border-bottom pb-sm-4 pb-3" style="border-color: #4c4c4c !important;">Daftar Harga</h2>
              </div>
              <div class="row mb-4 px-3 px-sm-0">
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
              </div>
              <div class="data-order mb-md-5 mb-4 daftar-harga">
                <div class="">
                  <table id="list-order" class="table w-100 text-white text-sm bg-transparent mb-0 rounded-3">
                    <thead>
                      <tr class="fw-600">
                        <td>Kode</td>
                        <td>Item</td>
                        <td>Non-Member</td>
                        <td>Member</td>
                        <td>Pemula</td>
                        <td>Sepuh</td>
                        <td>Status</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="fw-500">
                        <td><a href="#">MLBB_GLOBAL_86</div></td>
                        <td>86 (78+8) Diamonds</td>
                        <td>Rp. 22.033</td>
                        <td>Rp. 22.011</td>
                        <td>Rp. 21.293</td>
                        <td>Rp. 21.870</td>
                        <td><div class="bg-green text-white px-3 py-1 rounded-1 text-xs d-inline-block">Aktif</div></td>
                      </tr>
                      <tr class="fw-500">
                        <td><a href="#">MLBB_GLOBAL_86</div></td>
                        <td>86 (78+8) Diamonds</td>
                        <td>Rp. 22.033</td>
                        <td>Rp. 22.011</td>
                        <td>Rp. 21.293</td>
                        <td>Rp. 21.870</td>
                        <td><div class="bg-green text-white px-3 py-1 rounded-1 text-xs d-inline-block">Aktif</div></td>
                      </tr>
                      <tr class="fw-500">
                        <td><a href="#">MLBB_GLOBAL_86</div></td>
                        <td>86 (78+8) Diamonds</td>
                        <td>Rp. 22.033</td>
                        <td>Rp. 22.011</td>
                        <td>Rp. 21.293</td>
                        <td>Rp. 21.870</td>
                        <td><div class="bg-green text-white px-3 py-1 rounded-1 text-xs d-inline-block">Aktif</div></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- <div class="row justify-content-between mt-4 text-sm pe-md-4 mb-md-5 mb-4 data-show">
                <div class="col-12 col-sm-6 fw-500 mb-3 mb-md-0">Menampilkan 4 sampai 10 dari 4 hasil</div>
                <div class="col-12 col-sm-auto">
                <a class="bg-grey text-white px-3 py-2 rounded-2 text-sm d-inline-block fw-500 mx-1 text-decoration-none">Sebelumnya</a>
                <a class="bg-grey text-white px-3 py-2 rounded-2 text-sm d-inline-block fw-500 mx-1 text-decoration-none">Selanjutnya</a>
                </div>
              </div> -->
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
        scrollX: true,
        language: {
          url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/id.json',
        },
      });

    });
  </script>

</body>

</html>