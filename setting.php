
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
            <div class="rounded-3 bg-blackgrey text-white pb-sm-4 px-sm-4 px-3 pb-3 pt-3 pt-sm-0 mb-sm-4 mb-3">
              <a href="deposit.php" class="fw-500 mt-sm-4 pb-2 text-white text-decoration-none pb-md-1 mb-3 d-inline-block"><i class=" fa fa-arrow-left me-2"></i>Kembali ke Dashboard</a>
              <div class="px-md-2 px-1 mb-2 pb-1">
                <h2 class="fw-bold fs-3 mt-3">Profil</h2>
                <p class="fw-500">Informasi ini bersifat rahasia, jadi berhati-hatilah dengan apa yang Anda bagikan.</p>
              </div>
              <form>
                <div class="row align-items-center justify-content-between px-sm-2">
                  <div class="col-12 col-sm-6 form-group mb-2">
                    <label class="fw-600 mb-1 ps-md-3 ps-1 mt-2 pt-1">Nama Anda</label>
                    <input type="text" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" placeholder="Nama Anda"> 
                  </div>
                  <div class="col-12 col-sm-6 form-group mb-2">
                    <label class="fw-600 mb-1 ps-md-3 ps-1 mt-2 pt-1">Username</label>
                    <input type="text" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" placeholder="Username"> 
                  </div>
                  <div class="col-12 col-sm-12 form-group mb-2">
                    <label class="fw-600 mb-1 ps-md-3 ps-1 mt-2 pt-1">Alamat Email</label>
                    <input type="text" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" placeholder="username@gmail.com"> 
                  </div>
                  <div class="col-12 col-sm-12 form-group mb-2">
                    <label class="fw-600 mb-1 ps-md-3 ps-1 mt-2 pt-1">Nomor Handphone</label>
                    <input type="text" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" placeholder="Nomor Handphone"> 
                  </div>
                </div>
                <div class="d-flex justify-content-end px-sm-2 mt-3 mb-3">
                  <button class="btn btn-default border-0 px-3 py-2 fw-600 bg-yellow text-black rounded-2 text-sm">Simpan Profil</button>
                </div>
              </form>
            </div>
            <div class="rounded-3 bg-blackgrey text-white pb-sm-4 px-sm-4 px-3 pb-3 pt-3 pt-sm-3 mb-sm-4 mb-3">
              <div class="px-md-2 px-1 mb-2 pb-1">
                <h2 class="fw-bold fs-3 mt-3">Ubah Kata Sandi</h2>
                <p class="fw-500">Pastikan Anda mengingat kata sandi baru Anda sebelum mengubahnya.</p>
              </div>
              <form>
                <div class="row align-items-center justify-content-between px-sm-2">
                  <div class="col-12 col-sm-12 form-group mb-2">
                    <label class="fw-600 mb-1 ps-md-3 ps-1 mt-2 pt-1">Kata Sandi Saat Ini</label>
                    <input type="text" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" placeholder="Kata Sandi Saat Ini"> 
                  </div>
                  <div class="col-12 col-sm-6 form-group mb-2">
                    <label class="fw-600 mb-1 ps-md-3 ps-1 mt-2 pt-1">Kata Sandi Baru</label>
                    <input type="text" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" placeholder="Kata Sandi Baru"> 
                  </div>
                  <div class="col-12 col-sm-6 form-group mb-2">
                    <label class="fw-600 mb-1 ps-md-3 ps-1 mt-2 pt-1">Konfirmasi Kata Sandi Baru</label>
                    <input type="text" class="rounded-4 w-100 px-3 form-control py-2 border-0 text-sm" placeholder="Konfirmasi Kata Sandi Baru"> 
                  </div>
                </div>
                <div class="d-flex justify-content-end px-sm-2 mt-3 mb-3">
                  <button class="btn btn-default border-0 px-3 py-2 fw-600 bg-yellow text-black rounded-2 text-sm">Simpan Kata Sandi</button>
                </div>
              </form>
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
      $('#dashboard-sidebar').addClass("active");
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