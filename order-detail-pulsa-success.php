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
            <div class="rounded-4 bg-blackgrey text-white py-md-4 py-3 px-3 px-sm-5 pb-5">
              <div class="d-flex align-items-center justify-content-between">
                <a href="history.php" class="fw-500 mt-sm-3  text-white text-decoration-none pb-md-1 d-inline-block"><i class=" fa fa-arrow-left me-2"></i>Kembali ke Riwayat Transaksi</a>
                <a href="#" class="d-sm-none btn btn-default bg-yellow rounded-2 px-2 py-2 text-xs fw-600"><i class="fa fa-print me-1 fs-6"></i>Download Invoice</a>
              </div>
              <div class="d-sm-none">
                <div class="text-center mt-4 pt-1">
                <img src="images/check-icon.png" class="">
                </div>
                <div class="mb-2 text-white fw-600 mt-2 pt-3 text-center">Pesanan ini telah berhasil</div>
                <div class="fs-6 rounded-3 bg-green text-white mb-2 mx-3 fw-bold mt-3 py-2 text-center">SUCCESS</div>
              </div>
              <h1 class="text-yellow fw-bold fs-2 mt-4 mb-2 text-center text-sm-start pt-2 pt-sm-0">Pesanan Kamu</h1>
              <div class="d-flex align-items-center mb-4 text-center text-sm-start mb-5">
                <p class="fw-500 mb-0">Nomor Pesanan <span class="fw-600 text-yellow">HJGAD987987KHJH87JH</span> menunggu pembayaran sebelum dikirim</p>
                <a href="#" class="ms-4 d-none d-sm-inline-block btn btn-default bg-yellow rounded-2 px-md-3 px-2 py-2 text-sm fw-600"><i class="fa fa-print me-1 fs-6"></i>Download Invoice</a>
              </div>
              <div class="row">
                <div class="col-sm-2 d-none d-sm-block">
                  <img src="images/Mobile Legends.jpg" class="w-100 rounded-3">
                </div>
                <div class="col-sm-7 col-lg-6">
                  <div class="row">
                    <div class="col-4 d-sm-none pe-1">
                      <img src="images/Mobile Legends.jpg" class="w-100 rounded-3">
                    </div>
                    <div class="col-8">
                      <h2 class="fs-sm-3 fs-4 text-white fw-600 mb-1 mb-sm-2">Mobile Legends</h2>
                      <div class="fs-sm-6 mb-sm-4 mb-3 text-white fw-600">Weekly Diamond Pass</div>
                      <table class="fw-600">
                        <tr>
                          <td class="pe-sm-4 pe-2 pb-sm-2 pb-1">Nickname</td>
                          <td class="text-yellow">Zilongmlbb</td>
                        </tr>
                        <tr>
                          <td class=" pb-sm-2 pb-1">ID</td>
                          <td class="text-yellow">21345545234</td>
                        </tr>
                        <tr>
                          <td class=" pb-sm-2 pb-1">Server</td>
                          <td class="text-yellow">101112</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  
                  <div class="fs-6 mb-2 text-white fw-600 mt-4 pt-3">Metode Pembayaran</div>
                  <div class="row align-items-center">
                    <div class="col-5 col-sm-5 fw-500">Pulsa Telkomsel</div>
                    <div class="col-7 col-sm-7">
                      <div class="px-2 fw-bold py-1 bg-grey text-white rounded-3 d-inline-block">
                        <div id="nomorcopy" class="d-inline-block">082198276734</div> 
                        <button class="bg-transparent border-0 text-white px-0" onclick="copyNumber()"><i class="fa fa-file-o ms-1" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="bg-lightgrey px-3 mt-3 py-2 text-yellow rounded-3">Silahkan transfer <span class="fw-bold">Pulsa Telkomsel</span> ke nomor tersebut.</div>
                  <div class="border-bottom-2 mt-3 mb-2"></div>
                  <div class="row align-items-center mt-3">
                    <div class="col-5 col-sm-5 fw-500">Nomor Invoice</div>
                    <div class="col-7 col-sm-7">
                      <div class="px-2 fw-bold py-1 bg-grey text-white rounded-3 d-inline-block"> 
                        <div id="trxcopy" class="d-inline-block">HJGAD987987KHJH87JH </div> 
                        <button class="bg-transparent border-0 text-white px-0" onclick="copyTrx()"><i class="fa fa-file-o ms-1" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-5 col-sm-5 fw-500">Status Transaksi</div>
                    <div class="col-7 col-sm-7"><div class="bg-green text-white px-2 py-1 rounded-4 text-xs d-inline-block fw-600">Success</div></div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-5 col-sm-5 fw-500">Status Pembayaran</div>
                    <div class="col-7 col-sm-7"><div class="bg-green px-2 py-1 rounded-4 text-xs d-inline-block fw-600 text-white">Paid</div></div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-5 col-sm-5 fw-500">Pesan</div>
                    <div class="col-7 col-sm-7"><div class="rounded-4 text-xs d-inline-block fw-600 text-white">Pembayaran Berhasil</div></div>
                  </div>
                  <div class="fw-600 text-yellow mt-5 mb-2 text-center text-sm-start">Terima Kasih, Pesanan Anda telah kami selesaikan</div>
                  <div class="fw-500 text-white text-sm text-center text-sm-start">Silahkan di cek kembali Pesanan Anda.</div>
                </div>
                <div class="col-sm-5 col-lg-4 mt-3">
                  <div class="d-none d-sm-block">
                    <div class="text-center">
                    <img src="images/check-icon.svg" class="">
                    </div>
                    <div class="mb-2 text-white fw-600 mt-2 pt-3 text-center">Pesanan ini telah berhasil</div>
                    <div class="fs-6 rounded-3 bg-green text-white mb-2 mx-3 fw-bold mt-3 py-2 text-center">SUCCESS</div>
                  </div>
                  <div class="fs-5 text-white mt-4 pt-2 mb-3 fw-600">Rincian Pembayaran</div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="text-sm">Harga</div>
                    <div class="text-sm">Rp. 26.000</div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="text-sm">Jumlah</div>
                    <div class="text-sm">1 Qty</div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="text-sm">Biaya Admin</div>
                    <div class="text-sm">Rp. 500</div>
                  </div>
                  <div class="border-bottom-2 mt-3 mb-3"></div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div class="text-sm">Total Pembayaran</div>
                    <div class="text-sm">
                      <div class="fs-6 fw-bold py-1 px-3 rounded-5 bg-lightgrey">
                        <div id="pricecopy" class="d-inline-block" value-data="26500">Rp. 26.500 </div> 
                        <button class="bg-transparent border-0 text-white px-0" onclick="copyPrice()"><i class="fa fa-file-o ms-1" aria-hidden="true"></i></button>
                      </div> 
                    </div>
                  </div>
                  <div class="border-bottom-2 mt-3 mb-3"></div>
                  <div class="text-center mt-4 pt-3 mt-sm-5 mb-sm-3 text-sm">
                    <div class="mb-3">Order Bermasalah? Chat WA Minsi</div>
                    <a href="" class="btn bg-blue text-white px-3 py-1 rounded-2 text-sm">Bantuan CS</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="rounded-4 bg-blackgrey text-white py-md-5 py-4 px-4 px-sm-5 mt-5">
              <div class="row">
                <div class="col-12 col-sm-5">
                  <div class="mb-4 mt-2 mt-sm-0">
                    <div class="text-yellow fw-600 fs-6 mb-1">1. Transfer sesuai batas waktu</div>
                    <div class="text-white text-sm ps-3">Transfer Sebelum Batas Waktu Pembayaran Berakhir Agar Pesanan Tidak Dibatalkan Otomatis Oleh Sistem.</div>
                  </div>
                  <div class="mb-4 mt-2 mb-sm-0 mt-sm-0">
                    <div class="text-yellow fw-600 fs-6 mb-1">2. Transfer sesuai nominal</div>
                    <div class="text-white text-sm ps-3">Transfer Sesuai Dengan Nominal Total Yang Harus Di Bayar Agar Pembayaran Bisa Diverifikasi Otomatis Oleh Sistem.</div>
                  </div>
                </div>
                <div class="col-12 col-sm-7 ps-md-4">
                  <div class="mb-4 mt-2 mt-sm-0">
                    <div class="text-yellow fw-600 fs-6 mb-1">3. Setelah melakukan pembayaran</div>
                    <div class="text-white text-sm ps-3">Tunggu 5-10 Menit Sistem Akan Melakukan Verifikasi Pembayaran Anda Secara Otomatis Dan Anda Akan Mendapatkan Notifkasi Whatsapp Pembayaran Berhasil.</div>
                  </div>
                  <div class="mb-0 mt-2 mb-sm-0 mt-sm-0">
                    <div class="text-yellow fw-600 fs-6 mb-1">4. Proses Pengisian Otomatis</div>
                    <div class="text-white text-sm ps-3">Catat & Simpan No.Pesanan Anda Untuk Melakukan Cek Status Order, Detail Status Pesanan, Anda juga akan Mendapatkan Notifikasi Whatsapp ke Nomor WhatsApp Anda apabila Pesanan Berhasil Di Kirim.</div>
                  </div>
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
    function copyNumber() {
      var nomorcopy = document.createRange();
      nomorcopy.selectNode(document.getElementById("nomorcopy"));
      window.getSelection().removeAllRanges();
      window.getSelection().addRange(nomorcopy);
      document.execCommand("copy");
      window.getSelection().removeAllRanges();
      alert("Copied the text: " + nomorcopy);
    }
    function copyTrx() {
      var trxcopy = document.createRange();
      trxcopy.selectNode(document.getElementById("trxcopy"));
      window.getSelection().removeAllRanges();
      window.getSelection().addRange(trxcopy);
      document.execCommand("copy");
      window.getSelection().removeAllRanges();
      alert("Copied the text: " + trxcopy);
    }
    function copyPrice() {
      var priceElement = document.getElementById("pricecopy");

      // Get the value-data attribute
      var valueDataAttribute = priceElement.getAttribute("value-data");

      // Copy the value to the clipboard
      navigator.clipboard.writeText(valueDataAttribute)
      .then(() => {
          alert("Copied the text: " + valueDataAttribute);
      })
      .catch(err => {
          console.error('Unable to copy to clipboard', err);
      });
    }
    $(document).ready(function() {
      //TAMBAH CLASS ACTIVE PADA MENU SIDEBAR
      $('#transaksi-sidebar').addClass("active");
    });
  </script>
</body>

</html>