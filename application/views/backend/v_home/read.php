<!doctype html>
<html lang="en">
</html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="Viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom fonts for this template-->
    <link href="<?=BASEURL?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css.bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j^cY/iJYQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="<?=BASEURL?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-secondary text-white sidebar sidebar-dark accordion pt-4" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text text-white mx-3"><b> STUDIO FOTO POLARIS</b></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Home">
                    <span>Beranda</span></a><hr>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="Admin">
                    <span>Data Admin</span></a><hr>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Reservasi">
                    <span>Data Reservasi</span></a><hr>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Package">
                    <span>Data Package<span></a><hr>
            </li>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Pelanggan">
                    <span>Data Pelanggan</span></a><hr>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Transaksi">
                    <span>Data Transaksi</span></a><hr>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Auth/logout">
                    <span>Keluar</span></a><hr>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-secondary topbar mb-4 static-top shadow fixed-top">
                    <a class="navbar-brand text-white text-xl" href="#">SELAMAT DATANG</a>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 ml-5 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                <i class="fas fa-search fa-sm"></i>
                </button>
                </div>
                </div>
                </form>
                </div>
                </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-white large">Polaris</span>
            <img class="img-profile rounded-circle" src="<?=BASEURL?>/assets/img/haechan.jfif">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile
            </a>
            <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>Settings
            </a>
            <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout
            </a>
            </div>
            </li>

            </ul>

            </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">BERANDA</h1>
                    </div>
        <!-- Content Row -->

        <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>
<br>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://pbs.twimg.com/media/FzJ5qX7XgAIZ9_H?format=jpg&name=large" width="900" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://pbs.twimg.com/media/FzJ5qqfWAAQmVnP?format=jpg&name=large" width="900" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://pbs.twimg.com/media/FzJ5q6uWYAIjWZa?format=jpg&name=large" width="900" height="500">
    </div>
    <div class="carousel-item">
      <img src="https://pbs.twimg.com/media/FzJ5rLxWYAEu6jH?format=jpg&name=large" width="900" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>


<br><br>
        <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
        <div class="card-body text-center">
        <div class="row no-gutters align-items-center text-center">
        <div class="col mr-2 text-center">
        <div class="text-l text-center font-weight-bold text-black text-uppercase mb-1">PAKET PLATINUM</div>
        <img src="https://i.pinimg.com/750x/7f/9d/03/7f9d0322e956fe1676cbe5d25bd6eb60.jpg" class="card-img-top mt-3">
        <div class="h5 mb-0 font-weight-bold text-gray-800 mt-3">Rp 80.000</div>
        <div class="text-m text-font-lato h6 mb-0 text-gray-700 mt-3">Waktu foto 30 menit background custom/polos
        include 4 cetak foto 4r + all soft file</div><br>
        <a href="#" class="btn-btn-primary">BOOKING SEKARANG</a>
        </div>
        <div class="col-auto">
        </div>
        </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
    <div class="card-body text-center">
    <div class="row no-gutters align-items-center text-center">
    <div class="col mr-2 text-center">
    <div class="text-l text-center font-weight-bold text-black text-uppercase mb-1">PAKET GOLD</div></div>
    <div class="col-auto">
    <img src="https://i.pinimg.com/750x/e1/35/b5/e135b5b20cff61f811a515d07f6362c0.jpg" class="card-img-top mt-3">
    <div class="h5 mb-0 font-weight-bold text-gray-800 mt-3">Rp 75.000</div>
    <div class="text-m text-font-lato h6 mb-0 text-gray-700 mt-3">Waktu foto 30 menit background custom/polos
    include 2 cetak foto 4r + all soft file</div><br>
    <a href="#" class="btn-btn-primary">BOOKING SEKARANG</a>
    </div>
    </div>
    </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
    <div class="card-body text-center">
    <div class="row no-gutters align-items-center">
    <div class="col mr-2 text-center">
    <div class="text-l text-center font-weight-bold text-black text-uppercase mb-1">PAKET SILVER</div>
    </div>
    <div class="col-auto">
    <img src="https://i.pinimg.com/564x/65/48/92/654892bcb654c7810759349b94e769dc.jpg" class="card-img-top mt-3">
    <div class="h5 mb-0 font-weight-bold text-gray-800 mt-3">Rp 50.000</div>
    <div class="text-m text-font-lato h6 mb-0 text-gray-700 mt-3">Waktu foto 20 menit backround polos
    include cetak foto1  4r + all softfile</div><br>
    <a href="#" class="btn-btn-primary">BOOKING SEKARANG</a>
    </div>
    </div>
    </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
        <div class="card-body text-center">
        <div class="row no-gutters align-items-center text-center">
        <div class="col mr-2 text-center">
        <div class="text-l text-center font-weight-bold text-black text-uppercase mb-1">BRONZE</div>
        <img src="https://i.pinimg.com/750x/59/74/62/597462bef1a9daafa2776ed2868023a7.jpg" class="card-img-top mt-3">
        <div class="h5 mb-0 font-weight-bold text-gray-800 mt-3">30.000</div>
        <div class="text-m text-font-lato h6 mb-0 text-gray-700 mt-3">Waktu foto 10 menit background polos
        include all softfile</div><br><br>
        <a href="#" class="btn-btn-primary">BOOKING SEKARANG</a>
        </div>
        <div class="col-auto">
        </div>
        </div>
        </div>
    </div>
</div>
</div>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Studio Foto Polaris</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
.card .image{
  width: 40px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
}

.card .images .img{
  width:50%;
  height:100%;
  object-fit: cover;
}
</style>
</head>
<body> 

<div class="row">
<div class="container text-center">
  <h2>Client's Story</h2><hr>
  <div class="card-deck">
  <div class="col-md-4 mb-2">
    <div class="card bg-secondary shadow h-100 py-2">
    <div class="col mr-2 text-center">
    <div class="content">
    <div class=" images">
    <img class="img-profile rounded-circle" src="https://tse1.mm.bing.net/th?id=OIP.8TfdcT5FaIDv36OZpDqdegHaLT&pid=Api&P=0&h=180">
      <div class="card-body text-center text-white">
        <p class="card-tex">Studio fotonya banyak, dan punya konsep dan tema yang beragam, ukuran tiap studio juga mulai dari yang kecil sampai yang besar. Tersedia ruang ganti pakaian dan ruang tunggu yang nyaman dan bersih, petugas melayani dengan baik dan ramah.</p>
      </div>
    </div>
    </div>
    </div>
</div>
</div>
    <div class="col-md-4 mb-2">
    <div class="card bg-secondary shadow h-100 py-2">
    <div class="col mr-2 text-center">
        <div class="content">
    <div class=" images">
    <img class="img-profile rounded-circle" src="https://tse1.mm.bing.net/th?id=OIP.8TfdcT5FaIDv36OZpDqdegHaLT&pid=Api&P=0&h=180">
      <div class="card-body text-center text-white">
        <p class="card-text">Tempat foto keluarga maupun pasangan Dengan berbagai pake foto dan tema. Parkir mobil aman dan ada security, booking studio bisa online dan offline, pelayanan ramah dan cepat.</p>
      </div>
    </div>
    </div>
    </div>
</div>
</div>
    <div class="col-md-4 mb-2">
    <div class="card shadow h-100 py-2 bg-secondary">
    <div class="col mr-2 text-center">
    <div class="content">
    <div class=" images">
    <img class="img-profile rounded-circle" src="https://tse1.mm.bing.net/th?id=OIP.8TfdcT5FaIDv36OZpDqdegHaLT&pid=Api&P=0&h=180">
      <div class="card-body text-center text-white">
        <p class="card-text">tempat foto terbaik! Enggak pernah bosan mampir kesini. Hasilnya selalu bagus. Pegawainya ramah semua dan sangat membantu. Good luck for your business ya! Tetap menjadi tempat foto terfavorit :)</p>
      </div>
    </div>
    </div>
    </div>
    <br><br><br>
</div>
</div>

<br><br>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
</body>
</div class="text-center">
<p class="text-center">&copy;studio foto polaris</p>
</div>
</body>
</html>