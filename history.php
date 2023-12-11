
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
                <a href="#" class="active py-2 fw-500 px-3 me-2">Riwayat</a>
                <a href="#" class="py-2 fw-500 px-3 me-2">Order</a>
              </div>
              <div class="px-md-2 px-3 py-3">
                <h2 class="fw-bold fs-3 mt-3">Riwayat Transaksi</h2>
                <p class="fw-500">Menampilkan data riwayat transaksi yang telah Anda lakukan selama periode yang dipilih.</p>
              </div>
              <div class="report-search rounded-3 py-3 px-3 px-md-4 py-md-4 border-2">
                <div class="row">
                  <div class="col-6 col-md-3 col-sm-4 mb-3">
                    <label class="fw-500 mb-1 ps-md-3 ps-1">Status</label>
                    <select class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm">
                      <option>Semua</option>
                      <option>Pending</option>
                      <option>On Progress</option>
                      <option>Success</option>
                    </select>
                  </div>
                  <div class="col-6 col-md-3 col-sm-4 mb-3">
                    <label class="fw-500 mb-1 ps-md-3 ps-1">Status Pembayaran</label>
                    <select class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm">
                      <option>Semua</option>
                      <option>Waiting</option>
                      <option>Pending</option>
                      <option>Success</option>
                    </select>
                  </div>
                  <div class="col-6 col-md-3 col-sm-4 mb-3">
                    <label class="fw-500 mb-1 ps-md-3 ps-1">Tanggal Mulai</label>
                    <input type="date" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm">
                  </div>
                  <div class="col-6 col-md-3 col-sm-4 mb-3">
                    <label class="fw-500 mb-1 ps-md-3 ps-1">Tanggal Akhir</label>
                    <input type="date" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm">
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="fw-500 mb-1 ps-md-3 ps-1">Status</label>
                    <div class="input-group me-3 search-bar" aria-haspopup="true" id="dropsearchdown">
                      <input type="text" name="query" placeholder="#trxid $price @inputs" id="searchProd" class="form-control search-form rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" autocomplete="off">
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
              <div class="data-order rounded-3 pt-2">
                <div class="table-responsive">
                  <table class="table  text-white text-sm bg-transparent mb-0">
                    <tr class="fw-600">
                      <td>Nomor Invoice</td>
                      <td>ID Trx</td>
                      <td>Item</td>
                      <td>Inputan/ID</td>
                      <td>Harga</td>
                      <td>Tanggal</td>
                      <td>Status</td>
                    </tr>
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
                  </table>
                </div>
              </div>
              <div class="row justify-content-between mt-4 text-sm pe-md-4 mb-md-5 mb-4 data-show">
                <div class="col-12 col-sm-6 fw-500 mb-3 mb-md-0">Menampilkan 4 sampai 10 dari 4 hasil</div>
                <div class="col-12 col-sm-auto">
                <a class="bg-grey text-white px-3 py-2 rounded-2 text-sm d-inline-block fw-500 mx-1 text-decoration-none">Sebelumnya</a>
                <a class="bg-grey text-white px-3 py-2 rounded-2 text-sm d-inline-block fw-500 mx-1 text-decoration-none">Selanjutnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Section -->
  </main><!-- End #main -->

  
  <?php include "footer.php" ?>  
  <?php include "footer-script.php" ?>
  <script>
    $(document).ready(function() {
      $('#transaksi-sidebar').addClass("active");
    });
  </script>

</body>

</html>