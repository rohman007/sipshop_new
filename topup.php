
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
            <div class="row align-items-stretch">
              <div class="col-12 col-sm-8">
                <div class="rounded-3 bg-blackgrey text-white pb-sm-4 px-sm-4 px-3 pb-3 pt-3 pt-sm-0 mb-sm-4 mb-3">
                  <a href="deposit.php" class="fw-500 mt-sm-3 pb-2 text-white text-decoration-none pb-md-1 mb-4 d-inline-block"><i class=" fa fa-arrow-left me-2"></i>Riwayat Deposit</a>
                  <div class="d-flex align-items-center justify-content-between d-sm-block d-none">
                    <div class="ps-sm-1 w-100">
                      <div class=" fw-bold text-white fs-6">Jumlah Topup</div>
                      <label class="fw-500 mb-1 ps-md-3 ps-1 mt-2 pt-1">Jumlah</label>
                      <input type="text" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" placeholder="Rp. 10.000"> 
                    </div>
                  </div>
                  <!-- SALDO MOBILE -->
                  <div class="d-flex align-items-center w-100 d-sm-none">
                    <div class=" w-100">
                      <div class=" fw-500 text-white">Saldo Anda</div>
                      <div class="fs-2 fw-bold text-yellow">Rp. 100.000</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4 d-flex">
                <div class="rounded-3 bg-blackgrey text-white py-sm-3 px-sm-4 px-3 py-4 mb-sm-4 mb-3 d-flex align-items-center w-100">
                  <div class="d-flex align-items-center w-100 d-sm-block d-none">
                    <div class=" w-100">
                      <div class=" fw-500 text-white">Saldo Anda</div>
                      <div class="fs-2 fw-bold text-yellow">Rp. 100.000</div>
                    </div>
                  </div>
                  <!-- INPUT TOPUP MOBILE -->
                  <div class="d-flex align-items-center justify-content-between d-sm-none w-100">
                    <div class="ps-sm-1 w-100">
                      <div class=" fw-bold text-white fs-6">Jumlah Topup</div>
                      <label class="fw-500 mb-1 ps-md-3 ps-1 mt-2 pt-1">Jumlah</label>
                      <input type="text" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" placeholder="Rp. 10.000"> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rounded-3 bg-blackgrey text-white py-sm-3 px-sm-4  pb-1">
              <div class="px-md-2 px-3 pt-3 pb-2">
                <h2 class="fw-600 fs-5 mt-2 mt-sm-0  mb-0">Pilih Metode Pembayaran</h2>
              </div>
              <div id="pilih_pembayaran_container" class="container px-md-2 px-3">
                <div class="position-relative">
                  <input type="radio" name="payment-methode" class="payment_methode" id="paymentid-1" value="QRIS">
                  <label for="paymentid-1" class="position-absolute w-100 h-100 top-0 start-0"></label>
                  <div class="d-flex justify-content-between rounded mt-3 pe-3">
                    <div class="px-0">
                      <img class="mx-2 my-2" src="images/payments/qris.png" alt="">
                      <p class="border-top border-black border-3 px-2">Bayar dengan QRIS</p>
                    </div>
                    <div class="d-flex position-relative">
                      <div class="position-absolute top-0"></div>
                      <a class="bg-black px-1 px-lg-2 py-1 rounded-1 position-absolute end-100" href="#">
                        <span> Cara Bayar </span>
                      </a>
                      <div>
                        <p>Harga</p>
                        <p class="bg-black px-1 px-lg-3 py-2 rounded-1">
                          <span> Rp. 100.000.441,- </span>
                        </p>
                      </div>
                    </div>
                    <div class="position-absolute top-0 check-icon" style="">
                        <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                    </div>
                  </div>
                </div>
                <div class="position-relative">
                  <input type="radio" name="payment-methode" class="payment_methode" id="paymentid-2" value="Telkomsel">
                  <label for="paymentid-2" class="position-absolute w-100 h-100 top-0 start-0"></label>
                  <div class=" d-flex justify-content-between rounded mt-3 pe-3">
                    <div class="px-0">
                      <img class="mx-2 my-2" src="images/payments/telkomsel.png" alt="">
                      <p class="border-top border-black border-3 px-2">Bayar dengan Pulsa Telkomsel</p>
                    </div>
                    <div class="d-flex position-relative">
                      <a class="bg-black px-1 px-lg-2 py-1 rounded-1 position-absolute end-100" href="#">
                        <span> Cara Bayar </span>
                      </a>
                      <div>
                        <p>Harga</p>
                        <p class="bg-black px-1 px-lg-3 py-2 rounded-1">
                          <span> Rp. 1.441,- </span>
                        </p>
                      </div>
                    </div>
                    <div class="position-absolute top-0 check-icon" style="">
                        <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                    </div>
                  </div>
                </div>
                <div class="position-relative">
                  <input type="radio" name="payment-methode" class="payment_methode" id="paymentid-3" value="PulsaThree">
                  <label for="paymentid-3" class="position-absolute w-100 h-100 top-0 start-0"></label>
                  <div class=" d-flex justify-content-between rounded mt-3 pe-3">
                    <div class="px-0">
                      <img class="mx-2 my-2" src="images/payments/three.png" alt="">
                      <p class="border-top border-black border-3 px-2">Bayar dengan Pulsa Three</p>
                    </div>
                    <div class="d-flex position-relative">
                      <a class="bg-black px-1 px-lg-2 py-1 rounded-1 position-absolute end-100" href="#">
                        <span> Cara Bayar </span>
                      </a>
                      <div>
                        <p>Harga</p>
                        <p class="bg-black px-1 px-lg-3 py-2 rounded-1">
                          <span> Rp. 1.441,- </span>
                        </p>
                      </div>
                    </div>
                    <div class="position-absolute top-0 check-icon" style="">
                        <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                    </div>
                  </div>
                </div>
                <div class="position-relative">
                  <input type="radio" name="payment-methode" class="payment_methode" id="paymentid-4" value="Indomaret">
                  <label for="paymentid-4" class="position-absolute w-100 h-100 top-0 start-0"></label>
                  <div class=" d-flex justify-content-between rounded mt-3 pe-3">
                    <div class="px-0">
                      <img class="mx-2 my-2" src="images/payments/indomaret.png" alt="">
                      <p class="border-top border-black border-3 px-2">Bayar dengan Indomaret</p>
                    </div>
                    <div class="d-flex position-relative">
                      <a class="bg-black px-1 px-lg-2 py-1 rounded-1 position-absolute end-100" href="#">
                        <span> Cara Bayar </span>
                      </a>
                      <div>
                        <p>Harga</p>
                        <p class="bg-black px-1 px-lg-3 py-2 rounded-1">
                          <span> Rp. 1.441,- </span>
                        </p>
                      </div>
                    </div>
                    <div class="position-absolute top-0 check-icon" style="">
                        <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                    </div>
                  </div>
                </div>
                <div class="position-relative">
                  <input type="radio" name="payment-methode" class="payment_methode" id="paymentid-5" value="Alfamart">
                  <label for="paymentid-5" class="position-absolute w-100 h-100 top-0 start-0"></label>
                  <div class=" d-flex justify-content-between rounded mt-3 pe-3">
                    <div class="px-0">
                      <img class="mx-2 my-2" src="images/payments/alfamart.png" alt="">
                      <p class="border-top border-black border-3 px-2">Bayar dengan Alfamart</p>
                    </div>
                    <div class="d-flex position-relative">
                      <a class="bg-black px-1 px-lg-2 py-1 rounded-1 position-absolute end-100" href="#">
                        <span> Cara Bayar </span>
                      </a>
                      <div>
                        <p>Harga</p>
                        <p class="bg-black px-1 px-lg-3 py-2 rounded-1">
                          <span> Rp. 1.441,- </span>
                        </p>
                      </div>
                    </div>
                    <div class="position-absolute top-0 check-icon" style="">
                        <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                    </div>
                  </div>
                </div>
                <div class="position-relative">
                  <input type="radio" name="payment-methode" class="payment_methode" id="paymentid-6" value="Alfamidi">
                  <label for="paymentid-6" class="position-absolute w-100 h-100 top-0 start-0"></label>
                  <div class=" d-flex justify-content-between rounded mt-3 pe-3">
                    <div class="px-0">
                      <img class="mx-2 my-2" src="images/payments/alfamidi.png" alt="">
                      <p class="border-top border-black border-3 px-2">Bayar dengan Alfamidi</p>
                    </div>
                    <div class="d-flex position-relative">
                      <a class="bg-black px-1 px-lg-2 py-1 rounded-1 position-absolute end-100" href="#">
                        <span> Cara Bayar </span>
                      </a>
                      <div>
                        <p>Harga</p>
                        <p class="bg-black px-1 px-lg-3 py-2 rounded-1">
                          <span> Rp. 1.441,- </span>
                        </p>
                      </div>
                    </div>
                    <div class="position-absolute top-0 check-icon" style="">
                        <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                    </div>
                  </div>
                </div>
                <div class="position-relative">
                  <input type="radio" name="payment-methode" class="payment_methode" id="paymentid-7" value="Lawson">
                  <label for="paymentid-7" class="position-absolute w-100 h-100 top-0 start-0"></label>
                  <div class=" d-flex justify-content-between rounded mt-3 pe-3">
                    <div class="px-0">
                      <img class="mx-2 my-2" src="images/payments/lawson.png" alt="">
                      <p class="border-top border-black border-3 px-2">Bayar dengan Lawson</p>
                    </div>
                    <div class="d-flex position-relative">
                      <a class="bg-black px-1 px-lg-2 py-1 rounded-1 position-absolute end-100" href="#">
                        <span> Cara Bayar </span>
                      </a>
                      <div>
                        <p>Harga</p>
                        <p class="bg-black px-1 px-lg-3 py-2 rounded-1">
                          <span> Rp. 1.441,- </span>
                        </p>
                      </div>
                    </div>
                    <div class="position-absolute top-0 check-icon" style="">
                        <i class="fa fa-check position-absolute" style="right:-20px;"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="content-buy px-md-2 px-3 mt-4 mb-4">
                <button type="button" class="btn-order btn btn-warning fw-bold text-sm w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="images/topup.png" class="me-1" style="filter: brightness(8%);height: 20px;position: relative;top: -1px;"> Top Up Sekarang
                </button>
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