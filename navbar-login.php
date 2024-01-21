
    <header id="header">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container d-flex">
          <div class="d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php">
              <img src="images/logo.png">
            </a>
            <div class="background-layer"></div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <a class="navbar-brand d-sm-none" href="#">
                <img src="images/logo.png">
              </a>
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link" href="index.php"><i class="fa fa-home " aria-hidden="true"></i> Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="check-transaction.php"><i class="fa fa-search" aria-hidden="true"></i> Cek Pesanan</a>
                </li>
                <li class="sparator d-sm-none"></li>
                <li class="nav-item d-sm-none">
                  <a class="nav-link" href="dashboard.php"><i class="fa fa-home " aria-hidden="true"></i> Dashboard</a>
                </li>
                <li class="nav-item d-sm-none">
                  <a class="nav-link" href="history.php"><i class="fa fa-history" aria-hidden="true"></i> Transaksi</a>
                </li>
                <li class="nav-item d-sm-none">
                  <a class="nav-link" href="report.php"><i class="fa fa-file-text-o" aria-hidden="true"></i> Laporan</a>
                </li>
                <li class="nav-item d-sm-none">
                  <a class="nav-link text-red" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <button id="toggleButton" class="search-button text-yellow border-0 rounded-pill py-2 px-3 fs-6 bg-transparent me-2 d-sm-none"><i class="fa fa-search" aria-hidden="true"></i></button>
            <form method="GET" action="/search" class="search-form d-sm-block" id="searchBar" style="display:none">
              <div class="input-group me-3 search-bar" aria-haspopup="true" id="dropsearchdown">
                  <input type="text" name="query" placeholder="Cari game, voucher, pulsa, dll..." id="searchProd" class="form-control search-form text-xs" autocomplete="off">
                  <button type="submit" class="btn btn-warning" id="btnSearchProds">
                      <i class="fa fa-search"></i>
                  </button>
              </div>
              <div id="listProduk"></div>
            </form>
            
            <div class="dropdown after-loggin">
              <button class="btn btn-default bg-yellow rounded-5 px-md-3 px-2 py-2 mx-md-1 ms-2 text-sm fw-600 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user-o me-1 fw-600" aria-hidden="true"></i> <span class=" me-1">|</span>Username
              </button>
              <ul class="dropdown-menu dropdown-menu-end border-0" aria-labelledby="dropdownMenuButton1">
                <li class="fw-500 text-yellow text-sm px-3 py-2 fw-600">Telah masuk sebagai <br/><span class="fw-500">Username</span></li>
                <li class="sparator my-2"></li>
                <li><a class="dropdown-item text-sm fw-500 text-white py-2 text-yellow" href="dashboard.php"><img src="images/home-yellow.png" class="me-1" style="width: 18px;position: relative;top: -1px;margin-right:7px !important">Dashboard</a></li>
                <li><a class="dropdown-item text-sm fw-500 text-white py-2 text-yellow" href="topup.php"><img src="images/saldo-yellow.png" class="me-1" style="width: 18px;position: relative;top: -1px;margin-right:7px !important">Rp. 100.000</a></li>
                <li><a class="dropdown-item text-sm fw-500 text-white py-2 text-yellow" href="setting.php"><img src="images/setting-yellow.png" class="me-1" style="width: 18px;position: relative;top: -1px;margin-right:7px !important">Pengaturan</a></li>
                <li><a class="dropdown-item text-sm fw-500 text-white py-2 text-yellow mt-3" href="#"><img src="images/logout-yellow.png" class="me-1" style="width: 18px;position: relative;top: -1px;margin-right:7px !important">Keluar</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header><!-- End Header -->
