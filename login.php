
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SipShop - Situs Top Up Game Termurah Se Indonesia</title>
  <meta name="description" content="Situs Top Up Game Termurah Se Indonesia | Flash Sale Setiap Hari | Garansi Termurah | Proses Cepat | Aman dan Terpercaya.">
  <meta property="og:description" content="Situs Top Up Game Termurah Se Indonesia | Flash Sale Setiap Hari | Garansi Termurah | Proses Cepat | Aman dan Terpercaya.">

  <!-- Favicons -->
  <link href="images/favicon.png" rel="icon">

  <!--====== Font Google ======-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="css/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="css/owlcarousel/owl.theme.default.min.css" rel="stylesheet">

  <link href="css/login.css?v=111" rel="stylesheet">

  <!-- JS Files -->
  <script src="js/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script src="js/owl.carousel.js"></script>
</head>
<body id="login-page">
    <a href="index.php" class="close-button homepage-menu">X</a>
  <div class="d-flex vh-100 align-items-center">
    <div class="form-block px-3 ps-md-5 col-12 col-sm-6 col-md-4">
      <img src="images/logo_2x.png" class="form-logo mb-4">
      <h3>Masuk akun sipshop</h3>
      <h1>Selamat Datang</h1>
      <p class="text-white fw-500 mb-4">Masuk dengan akun terdaftar kamu</p>
      <form action="">  
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="nohp" placeholder="Nomor handphone" required="">
        </div>
        <div class="form-group mb-3 position-relative">
            <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required="">
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>
        <button class="btn btn-primary btn-sm w-100 mb-3" type="submit"><strong>Masuk Sekarang</strong></button>
        <p class="mb-2 text-center text-white">Belum punya akun? <a href="register.php" class="ms-2">Daftar Sekarang</a></p>
        <p class=" text-center"><a href="#" class="">Lupa Password</a></p>
      </form>
    </div>
    <div class="image-form overflow-hidden">
      <img src="images/hero-login.png" class="form-image vh-100">
    </div>
  </div>

</body>


  <!-- Template Main JS File -->
  <script>
    $(document).ready(function() {
      $(".toggle-password").click(function() {

      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
      });
    })
  </script>
</html>