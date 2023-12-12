
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
            <div class="rounded-3 bg-blackgrey text-white py-sm-3 px-sm-4 px-3 py-3 mb-sm-4 mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <div class="ps-sm-2">
                  <div class=" fw-500 text-white">Saldo Anda</div>
                  <div class="fs-2 fw-bold text-yellow">Rp. 100.000</div>
                </div>
                <a href="topup.php" class="btn btn-default bg-yellow rounded-2 px-md-3 px-3 py-2 mx-md-1 mx-2 text-sm fw-bold text-black">Top Up</a>
              </div>
              
            </div>
            <div class="rounded-3 bg-blackgrey text-white py-sm-3 px-sm-4  pb-1">
              <div class="px-md-2 px-3 py-3">
                <h2 class="fw-bold fs-3 mt-2 mt-sm-0">Riwayat Deposit</h2>
                <p class="fw-500">Menampilkan data riwayat deposit yang telah Anda lakukan selama periode yang dipilih.</p>
              </div>
              <div class="report-search rounded-3 py-3 px-3 px-md-4 py-md-4 border-2">
                <div class="row">
                  <div class="col-6 col-sm-4 mb-3 pe-2 pe-md-3">
                    <label class="fw-500 mb-1 ps-md-3 ps-1">Produk</label>
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
                  <div class="col-6 col-sm-4 mb-3 ps-2 ps-md-3">
                    <label class="fw-500 mb-1 ps-md-3 ps-1">Tanggal Mulai</label>
                    <input type="date" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm">
                  </div>
                  <div class="col-6 col-sm-4 mb-3 pe-2 pe-md-3">
                    <label class="fw-500 mb-1 ps-md-3 ps-1">Tanggal Akhir</label>
                    <input type="date" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm">
                  </div>
                  <div class="col-6 col-sm-4  ps-2 ps-md-3">
                    <label class="fw-500 mb-1 ps-md-3 ps-1">Status</label>
                    <div class="input-group me-3 search-bar" aria-haspopup="true" id="dropsearchdown">
                      <input type="text" name="query" placeholder="$price" id="searchProd" class="form-control search-form rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" autocomplete="off">
                      <button type="submit" class="btn btn-warning position-absolute" id="btnSearchProds">
                          <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex px-md-4 px-0 py-4 button-block justify-content-end">
                <a href="#" class="btn btn-default bg-yellow rounded-2 px-md-3 px-2 py-2 mx-md-1 mx-2 text-sm fw-600">Download CSV</a>
                <a href="#" class="btn btn-default bg-yellow rounded-2 px-md-3 px-2 py-2 mx-md-1 mx-2 text-sm fw-600">Download XLSX</a>
                <div class="dropdown">
                  <button class="btn btn-default bg-yellow rounded-2 px-md-3 px-2 py-2 mx-md-1 mx-2 text-sm fw-600 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    10 Entries
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item text-sm fw-500" href="#">10 Entries</a></li>
                    <li><a class="dropdown-item text-sm fw-500" href="#">25 Entries</a></li>
                    <li><a class="dropdown-item text-sm fw-500" href="#">50 Entries</a></li>
                    <li><a class="dropdown-item text-sm fw-500" href="#">100 Entries</a></li>
                  </ul>
                </div>
              </div>
              <div class="data-order mb-md-5 mb-4">
                <div class="">
                  <table id="list-order" class="table w-100 text-white text-sm bg-transparent mb-0 rounded-3">
                    <thead>
                      <tr class="fw-600">
                        <td>Nomor Invoice</td>
                        <td>Tanggal</td>
                        <td>Harga</td>
                        <td>Metode Pembayaran</td>
                        <td>Status</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="fw-500">
                        <td><a href="#">HJGAD987987KHJH87JH</div></td>
                        <td>06-12-2023  20:32:11</td>
                        <td>Rp. 26.500 </td>
                        <td>Mandiri Va </td>
                        <td><div class="bg-yellow text-black px-2 py-1 rounded-1 text-xs d-inline-block">Pending</div></td>
                      </tr>
                      <tr class="fw-500">
                        <td><a href="#">HJGAD987987KHJH87JH</div></td>
                        <td>06-12-2023  20:32:11</td>
                        <td>Rp. 26.500 </td>
                        <td>Mandiri Va </td>
                        <td><div class="bg-yellow text-black px-2 py-1 rounded-1 text-xs d-inline-block">On Progress</div></td>
                      </tr>
                      <tr class="fw-500">
                        <td><a href="#">HJGAD987987KHJH87JH</div></td>
                        <td>06-12-2023  20:32:11</td>
                        <td>Rp. 26.500 </td>
                        <td>Mandiri Va </td>
                        <td><div class="bg-green text-white px-2 py-1 rounded-1 text-xs d-inline-block">Success</div></td>
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
      $('#deposit-sidebar').addClass("active");
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