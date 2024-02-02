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
              <h1 class="text-yellow fw-bold fs-2 mt-4 mb-4 mb-sm-2 text-center text-sm-start pt-2 pt-sm-0">Detail Pesanan</h1>
              <div class="d-flex align-items-center mb-3 mb-sm-5 text-center text-sm-start mb-2 justify-content-between">
                <p class="fw-500 mb-0">Transaksi kamu <span class="fw-600 text-yellow">SIP643783</span> menunggu pembayaran, batas waktu bayar <span class="text-red">(<span id="countdown" class="text-nowrap"></span>)</span></p>
                <a href="#" class="text-nowrap ms-4 d-none d-sm-inline-block btn btn-default bg-yellow rounded-2 px-md-3 px-2 py-2 text-sm fw-600"><i class="fa fa-print me-1 fs-6"></i>Download Invoice</a>
              </div>
              <div class="d-block d-sm-none">
                <div class="border-bottom-2 mb-2"></div>
                <div class="row align-items-center">
                  <div class="col-6  fw-500">Bayar dengan</div>
                  <div class="col-6  fw-500 text-end">QRIS - FEE 0.7%</div>
                </div>
                <div class="border-bottom-2 mt-2 mb-3"></div>
              </div>
              <div class="d-sm-none mt-3">
                <div class="text-sm text-white text-center mb-3">Scan kode QR / download QR / screenshoot QR dibawah ini dengan aplikasi e-wallet / m-banking untuk membayar</div>
                <div class="text-center mx-auto" style="width:60%">
                  <img src="images/qrcode.jpg" class="w-100">
                  <a class="mt-3 fw-600 py-1 w-100 text-center bg-yellow text-black d-block text-decoration-none rounded-4 text-sm">Download Kode QR</a>
                </div>
                <!-- <div class="mb-2 text-white fw-600 mt-2 pt-3 text-center">Pesanan ini akan berakhir pada</div>
                <div class="fs-6 rounded-3 bg-red text-white mb-2 mx-3 fw-bold mt-3 py-2 text-center text-uppercase">20 jam, 30 menit, 1 detik</div> -->
              <div class="border-bottom-2 mt-3 mb-4"></div>
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
                  <!-- <div class="bg-lightgrey px-3 mt-3 py-2 text-yellow rounded-3 fw-500">Gunakan Ewallet atau aplikasi mobile banking yang tersedia scan QRIS.</div> -->
                  <div class="border-bottom-2 mt-3 mb-2"></div>
                  <div class="row align-items-center mt-3">
                    <div class="col-5 col-sm-5 fw-500">Kode Transaksi</div>
                    <div class="col-7 col-sm-7">
                      <div class="px-2 fw-bold py-1 bg-grey text-white rounded-3 d-inline-block"> 
                        <div id="trxcopy" class="d-inline-block">SIP643783 </div> 
                        <button class="bg-transparent border-0 text-white px-0" onclick="copyTrx()"><i class="fa fa-file-o ms-1" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-5 col-sm-5 fw-500">Status Transaksi</div>
                    <div class="col-7 col-sm-7"><div class="bg-yellow text-black px-2 py-1 rounded-4 text-xs d-inline-block fw-600">Pending</div></div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-5 col-sm-5 fw-500">Status Pembayaran</div>
                    <div class="col-7 col-sm-7"><div class="bg-red  px-2 py-1 rounded-4 text-xs d-inline-block fw-600 text-white">Unpaid</div></div>
                  </div>
                  <div class="row align-items-center mt-3">
                    <div class="col-5 col-sm-5 fw-500">Pesan</div>
                    <div class="col-7 col-sm-7"><div class="rounded-4 text-xs d-inline-block fw-600 text-white">Pembayaran Berhasil</div></div>
                  </div>
                  <div class="d-none d-sm-block">
                    <div class="border-bottom-2 mb-2 mt-3"></div>
                    <div class="row align-items-center">
                      <div class="col-5  fw-500">Bayar dengan</div>
                      <div class="col-6  fw-500 text-start">QRIS - FEE 0.7%</div>
                    </div>
                    <div class="border-bottom-2 mt-2 mb-3"></div>
                  </div>
                  <!-- <div class="fw-600 text-yellow mt-5 mb-2 text-center text-sm-start">Harap selesaikan pembayaran sebelum 7 Desember 2023 12:00 WIB</div>
                  <div class="fw-500 text-white text-sm text-center text-sm-start">Nominal pembayaran <i><b>Harus</b></i> sesuai agar sistem dapat memverifikasi pembayaran-mu secara otomatis.</div> -->
                </div>
                <div class="col-sm-5 col-lg-4 mt-3">
                  <div class="d-none d-sm-block">
                  <div class="text-sm text-white text-center mb-3">Scan kode QR / download QR / screenshoot QR dibawah ini dengan aplikasi e-wallet / m-banking untuk membayar</div>
                    <div class="text-center mx-auto" style="width:60%">
                      <img src="images/qrcode.jpg" class="w-100">
                      <a class="mt-3 fw-600 py-1 w-100 text-center bg-yellow text-black d-block text-decoration-none rounded-4 text-sm">Download Kode QR</a>
                    </div>
                    <!-- <div class="mb-2 text-white fw-600 mt-2 pt-3 text-center">Pesanan ini akan berakhir pada</div>
                    <div class="fs-6 rounded-3 bg-red text-white mb-2 mx-3 fw-bold mt-3 py-2 text-center text-uppercase">20 jam, 30 menit, 1 detik</div> -->
                  </div>
                  <div class="fs-5 text-white mt-4 pt-2 mb-3 fw-600 d-none d-sm-block">Rincian Pembayaran</div>
                  <div class="border-bottom-2 mt-2 mb-3 d-block d-sm-none"></div>
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
    // Set the target date for the countdown
    const targetDate = new Date('2024-12-31T23:59:59').getTime();

    // Update the countdown every second
    const countdownInterval = setInterval(function() {
      // Get the current date and time
      const currentDate = new Date().getTime();

      // Calculate the remaining time
      const remainingTime = targetDate - currentDate;

      // Calculate days, hours, minutes, and seconds
      const days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
      const hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

      // Display the countdown
      document.getElementById('countdown').innerHTML = `${hours}jam ${minutes}menit ${seconds}detik`;

      // Check if the countdown is over
      if (remainingTime < 0) {
        clearInterval(countdownInterval);
        document.getElementById('countdown').innerHTML = 'Countdown expired!';
      }
    }, 1000); // Update every second
</script>
</body>

</html>