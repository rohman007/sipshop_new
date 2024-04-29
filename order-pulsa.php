<?php include "header.php" ?> 
<?php $footercatalog = ""; ?>
<body>
  <?php include "navbar-login.php" ?> 

  <main id="main" class="position-relative">
  
    <!-- ======= Hero Section ======= -->
    <section id="history-page" class="section py-4">
      <div class="container">
          <div class="col-12 col-sm-12">
            <div class="rounded-4 bg-blackgrey text-white py-md-3 py-3 px-3 px-sm-4 pb-4 pb-md-5">
              <div class="d-flex align-items-center justify-content-between px-2 mb-4 pb-2">
                <a href="history.php" class="fw-500 mt-sm-3  text-white text-decoration-none pb-md-1 d-inline-block"><i class=" fa fa-arrow-left me-2"></i>Kembali ke Home</a>
              </div>
              <div class="px-sm-5">
                <h1 class="text-yellow fw-bold fs-2 mt-4 mb-2 text-center text-sm-start pt-2 pt-sm-0">Detail Pemesanan</h1>
                <div class="d-flex align-items-center mb-4 text-center text-sm-start mb-4">
                  <p class="fw-500 mb-0">Kode transaksi <span class="fw-600 text-yellow">SIP1234567</span> akan dikirim secara otomatis ketika sudah dibayar. </p>
                </div>
                <div class="border-bottom-2 mt-2 mb-2"></div>
                <div class="fw-500 mb-0 fs-6 mt-3">Nomor kamu <span class="fw-600 text-yellow">081234567890</span> harus transfer pulsa ke <span class="fw-600 text-yellow">082111133336</span> sebesar 19.000</div>
                <div class="text-center mt-5 row justify-content-center">
                  <div class="col-12 col-sm-4">
                    <div class="fw-600 fs-6 mb-2">Transfer Pulsa ke Nomor ini :</div>
                    <div class="px-2 fw-bold py-1 bg-grey text-white rounded-3 d-inline-block text-nowrap fs-6 w-100 position-relative">
                      <div id="nomorcopy" class="d-inline-block fs-5">082111133336</div> 
                      <button class="bg-transparent border-0 text-white px-0 position-absolute end-0 pt-1 top-0 mt-1 pe-2" onclick="copyNumber()"><i class="fa fa-file-o ms-1" aria-hidden="true"></i></button>
                    </div>
                    <div class="fw-600 fs-6 mb-2 mt-4">Nominal:</div>
                    <div class="px-2 fw-bold py-1 bg-grey text-white rounded-3 d-inline-block text-nowrap fs-6 w-100 position-relative">
                      <div id="nominalcopy" class="d-inline-block fs-5">19000</div> 
                      <button class="bg-transparent border-0 text-white px-0 position-absolute end-0 pt-1 top-0 mt-1 pe-2" onclick="copyNominal()"><i class="fa fa-file-o ms-1" aria-hidden="true"></i></button>
                    </div>
                    <div class="fw-600 fs-6 mb-2 mt-4">Batas waktu bayar:</div>
                    <span id="countdown" class="text-nowrap bg-red col-12 col-sm-8 d-block mx-auto py-2 rounded-3 fw-600"></span>
                  </div>
                  <div class="col-12"></div>
                  <div class="col-12 col-sm-6 mt-4">
                    <button id="btn-transfer" class="btn btn-default btn-border-yellow text-yellow w-100 rounded-2 fw-600"><i class="fa fa-phone"></i> Transfer Pulsa Sekarang</button>
                  </div>
                </div>
                <div class="border-bottom-2 mt-4 mb-2"></div>
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-6 mt-3">
                    <div class="fw-600 fs-6 mb-3 mt-0 text-center">Cara Pembayaran:</div>
                    <div class="accordion accordion-transfer" id="accordionExample">
                      <div class="accordion-item bg-transparent text-white mb-3 rounded-3">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button bg-transparent text-white fw-600 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSection1" aria-expanded="false" aria-controls="#collapseSection1">
                          *858#
                          </button>
                        </h2>
                        <div id="collapseSection1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample" style="">
                          <div class="accordion-body">
                          <p>Cara Transfer Pulsa Telkomsel via *858#</p><p>1. Buka Panggilan<br><span style="font-size: 1rem;">2. Ketik&nbsp;<br></span><span style="font-size: 1rem;"><font color="#ff0000"><b>*858*082111133336*</b></font></span><font color="#ff0000"><span style="font-weight: bolder;">180,000</span><b style="font-size: 1rem;">#</b></font><b style="color: rgb(255, 0, 0); font-size: 1rem;">&nbsp;</b></p><p><span style="font-size: 1rem;">(tanpa koma pada nominal)<br></span><span style="font-size: 1rem;">3. Pilih Balas dan ketik 1<br></span><span style="font-size: 1rem;">4. Selesai!</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item bg-transparent text-white mb-3 rounded-3">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-transparent text-white fw-600 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSection2" aria-expanded="true" aria-controls="#collapseSection2">
                            Info Pembayaran
                            </button>
                          </h2>
                          <div id="collapseSection2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p>Pastikan nomer WhatsApp yang kamu masukan saat order adalah NOMOR PENGIRIM PULSA&nbsp;<br></p><p>Harus menggunakan Transfer Pulsa, bukan beli di counter pulsa.</p><p>Transfer Pulsa harus sesuai nominal yang tertera di invoice.</p><p>Jika ada kendala silakan hubungi Minsi lewat WA : 082111133336</p>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fs-6 fw-500 pt-2 text-center">Info selengkapnya ada di website Telkomsel. <a href="" class="text-yellow text-decoration-none">[Baca disini]</a></div>
                <div class="border-bottom-2 mt-4 mb-2"></div>
                <div class="text-center">
                  <div class="text-sm mt-4 mb-4">Setelah transfer pulsa, orderan kamu akan di proses secara otomatis dan cepat. Namun jika 5 menit belum masuk,<br class="d-none d-sm-block"/> maka silakan hubungi bantuan CS via WhatsApp dibawah ini.</div>
                  <a href="https://wa.me/6282111133336?text=Halo Admin... Nomor pesanan SIP838692" class="btn bg-blue text-white px-3 py-1 rounded-2 text-sm">Bantuan CS</a>
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
      // alert("Copied the text: " + nomorcopy);

      var overlay = document.createElement('div');
      overlay.classList.add('overlay');
      document.body.appendChild(overlay);

      var alertBox = document.createElement('div');
      alertBox.classList.add('custom-alert');
      alertBox.innerHTML = `
        <div class="check-icon"></div>
        <div>
        ${nomorcopy} successfully copied to the clipboard!
        </div>
      `;
      document.body.appendChild(alertBox);

      overlay.style.display = 'block';
      alertBox.style.display = 'block';

      setTimeout(function () {
        $('.custom-alert').addClass("active");
      }, 200);

      
      setTimeout(function () {
        $('.custom-alert').removeClass("active");
      }, 2800);
      
      // Close the custom alert box after 2 seconds
      setTimeout(function () {
        closeCustomAlert();
      }, 3000);
    }
    function copyNominal() {
      var nomorcopy = document.createRange();
      nomorcopy.selectNode(document.getElementById("nominalcopy"));
      window.getSelection().removeAllRanges();
      window.getSelection().addRange(nomorcopy);
      document.execCommand("copy");
      window.getSelection().removeAllRanges();
      // alert("Copied the text: " + nomorcopy);

      var overlay = document.createElement('div');
      overlay.classList.add('overlay');
      document.body.appendChild(overlay);

      var alertBox = document.createElement('div');
      alertBox.classList.add('custom-alert');
      alertBox.innerHTML = `
        <div class="check-icon"></div>
        <div>
        ${nomorcopy} successfully copied to the clipboard!
        </div>
      `;
      document.body.appendChild(alertBox);

      overlay.style.display = 'block';
      alertBox.style.display = 'block';

      setTimeout(function () {
        $('.custom-alert').addClass("active");
      }, 200);

      
      setTimeout(function () {
        $('.custom-alert').removeClass("active");
      }, 2800);
      
      // Close the custom alert box after 2 seconds
      setTimeout(function () {
        closeCustomAlert();
      }, 3000);
    }
      
      const targetDate = new Date('29 April 2024 15:11:26').getTime();
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
      document.getElementById('countdown').innerHTML = `${hours} jam ${minutes} menit ${seconds} detik`;

      // Check if the countdown is over
      if (remainingTime < 0) {
        clearInterval(countdownInterval);
        document.getElementById('countdown').innerHTML = 'Countdown expired!';
      }
    }, 1000); // Update every second
  </script>
</body>

</html>