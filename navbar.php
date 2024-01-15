
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
            <div class="rounded-5 align-items-center login-action-button d-flex justify-content-around ms-4" >
              <a href="login.php" style="">Login</a>
              <!-- <span>|</span> -->
              <!-- <a href="register.php">Register</a> -->
            </div>
          </div>
        </div>
      </nav>
    </header><!-- End Header -->
    