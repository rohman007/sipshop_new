
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
            <div class="rounded-4 bg-blackgrey text-white py-sm-3 px-sm-4 pb-1 mb-4">
              <div class="px-md-2 px-3 py-3">
                <div class="fw-600 fs-5 mt-2 mt-sm-0 mb-2">Tingkatkan Akun Anda</div>
              </div>
              <div class="status-akun text-white">
                <div class="bar-status">
                  <div class="bar-status-active" style="width:0%"><div></div></div>
                </div>
                <div class="row justify-content-between label-status">
                  <div class="col-auto">
                    <div class="text-sm text-white px-3 py-1 bg-grey rounded-2">Member</div>
                  </div>
                  <div class="col-auto">
                    <div class="text-sm text-black px-3 py-1 bg-yellow rounded-2">Pemula</div>
                  </div>
                  <div class="col-auto">
                    <div class="text-sm text-white px-3 py-1 bg-grey rounded-2">Sepuh</div>
                  </div>
                </div>
              </div>
              <div class="bg-grey text-white fs-5 rounded-2 px-4 py-3 fw-500 mt-4">
              Dapatkan harga lebih murah dengan melakukan upgrade akun Anda ke Reseller! Biaya untuk melakukan upgrade akan mengurangi saldo akun.
              </div>
              <div class="row justify-content-center align-items-end mt-4 mb-3">
                <div class="col-12 col-sm-5">
                  <label class="fw-500 mb-1 ps-md-3 ps-1">Status</label>
                  <select class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm">
                    <option>Pilih</option>
                    <option>Sepuh</option>
                    <option>Pemula</option>
                    <option>Reseller</option>
                  </select>
                </div>
                <div class="col-6 col-sm-2">
                    <label class="fw-500 mb-1 text-center text-sm w-100">Harga Upgrade</label>
                    <div class="rounded-4 w-100 px-3 form-control text-center py-2 border-0 text-sm bg-grey text-white fw-600">Rp. 300.000</div>
                </div>
                <div class="col-6 col-sm-2">
                <button  class="bg-yellow text-black btn btn-default rounded-2 border-0 py-2 fw-bold px-3 me-2 fw-500 text-sm">Upgrade</button>
                </div>
              </div>
            </div>
            <div class="rounded-4 bg-blackgrey text-white py-sm-3 px-sm-4  pb-1">
              <div class="px-md-2 px-3 py-3">
                <div class="fw-600 fs-5 mt-2 mt-sm-0 mb-2">Riwayat Transaksi Terbaru Hari Ini</div>
              </div>
              <div class="data-order mb-md-4 mb-4">
                <div class="">
                  <table id="list-order" class="table  text-white text-sm bg-transparent mb-0 rounded-3">
                    <thead>
                      <tr class="fw-600">
                        <td>Nomor Invoice</td>
                        <td>ID Trx</td>
                        <td>Item</td>
                        <td>Inputan/ID</td>
                        <td>Harga</td>
                        <td>Tanggal</td>
                        <td>Status</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="fw-500">
                        <td><a href="#">HJGAD987987KHJH87JH</div></td>
                        <td>n/a</td>
                        <td>Weekly Diamond Pass</td>
                        <td><div class="rounded-3 px-2 py-1">2134564223 - 1001 <i class="fa fa-file-o ms-1" aria-hidden="true"></i></div></td>
                        <td>Rp. 26.500 </td>
                        <td>06-12-2023  20:32:11</td>
                        <td><div class="bg-yellow text-black px-2 py-1 rounded-1 text-xs d-inline-block">Pending</div></td>
                      </tr>
                      <tr class="fw-500">
                        <td><a href="#">HJGAD987987KHJH87JH</div></td>
                        <td>n/a</td>
                        <td>Weekly Diamond Pass</td>
                        <td><div class="rounded-3 px-2 py-1">2134564223 - 1001 <i class="fa fa-file-o ms-1" aria-hidden="true"></i></div></td>
                        <td>Rp. 26.500 </td>
                        <td>06-12-2023  20:32:11</td>
                        <td><div class="bg-yellow text-black px-2 py-1 rounded-1 text-xs d-inline-block">On Progress</div></td>
                      </tr>
                      <tr class="fw-500">
                        <td><a href="#">HJGAD987987KHJH87JH</div></td>
                        <td>n/a</td>
                        <td>Weekly Diamond Pass</td>
                        <td><div class="rounded-3 px-2 py-1">2134564223 - 1001 <i class="fa fa-file-o ms-1" aria-hidden="true"></i></div></td>
                        <td>Rp. 26.500 </td>
                        <td>06-12-2023  20:32:11</td>
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