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
                <h2 class="text-white fw-bold fs-3 mt-4 mb-2 text-center text-sm-start pt-2 pt-sm-0">Transfer Pulsa</h2>
                <div class="border-bottom-2 mt-3 mb-2"></div>
                <div class="row align-items-center mt-3">
                  <div class="col-6 col-sm-3 fw-bold fs-6">Provider</div>
                  <div class="col-6 col-sm-9">TELKOMSEL</div>
                </div>
                <div class="row align-items-center mt-2">
                  <div class="col-6 col-sm-3 fw-bold fs-6">Total Pembayaran</div>
                  <div class="col-6 col-sm-9">Rp 19.000</div>
                </div>
                <div class="border-bottom-2 mt-3 mb-3"></div>
                <div class="fs-6 fw-bold mb-2">Kebijakan Transfer Pulsa Telkomsel</div>
                <div class="text-white">
                  Kamu harus memiliki sisa pulsa minimal Rp. 5.000 setelah transfer dan dipotong biaya admin, <span class="fw-600 text-yellow fst-italic">baca ketentuannya disini.</span>
                </div> 
                <div class="alert alert-success text-center fw-500 py-2 rounded-3 mt-4 alert-pulsa"><div class="pt-1"></div>Kamu harus mempunyai pulsa minimal Rp. 26.000 untuk melakukan transfer pulsa Telkomsel sebesar Rp. 19.000 ini.<div class="pt-1"></div></div>
                <div class="bg-lightgrey px-4 mt-4 py-3 text-yellow rounded-3 pulsa-input-block">
                  <div class="col-12 mb-1">
                    <label class="fw-500 mb-2 ps-md-2 ps-1 text-white fw-500 mt-1">Masukkan nomor yang akan kamu gunakan untuk Transfer Pulsa di bawah ini. </label>
                    <input type="text" class="rounded-3 w-100 px-3 form-control py-2 mb-3 border-0 text-sm" placeholder="08xxxxxxxxxx"  oninput="changeDivValue()" id="input-phone">
                    <button type="button" class="btn btn-default bg-yellow fw-bold text-sm w-100 py-2 roundend-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Selanjutnya
                    </button>
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

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content bg-blackgrey" style="margin: auto;padding: 10px 10px;">
        <div class="modal-body">
          <form action="order-pulsa.php">
            <div class="fs-5 fw-600 text-white text-center  mb-2 mt-1">Periksa kembali nomor Anda :</div>
            <div class="text-yellow fs-2 text-center fw-600 pt-2 pb-2" id="result-phone">0813-1122-3344</div>
            <input id="number-input" type="hidden">
            <div class="bg-grey text-white rounded-2 p-3 mb-3 mt-3 text-sm">
            Nomor di atas merupakan nomor yang harus kamu gunakan untuk transfer pulsa agar dapat di proses secara otomatis dan cepat. Jika pulsa di kirim bukan dari nomor di atas, maka orderan kamu tidak akan di proses.
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <button type="button" class="btn btn-secondary text-sm w-50 me-2 fw-bold" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
              <button type="submit" id="buyNow" class="btn btn-warning fw-bold text-sm w-50 ms-2">Konfimasi Nomor</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>

  <?php include "footer.php" ?>
  <?php include "footer-script.php" ?>
  <script>
    function changeDivValue(value) {
      var input = document.getElementById('input-phone').value;
      var result = '';
      // Menambahkan "-" setiap tiga huruf
      for (var i = 0; i < input.length; i++) {
          if (i > 0 && i % 4 == 0) {
              result += '-';
          }
          result += input[i];
      }
      // Menampilkan hasil pada elemen div target
      document.getElementById('result-phone').innerText = result;
      document.getElementById('number-input').value = input;
    }
  </script>
</body>

</html>