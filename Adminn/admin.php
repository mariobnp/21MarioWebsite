<?php
session_start();
if (!$_SESSION['username'] || !$_SESSION['password']) {
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Dashboard admin</title>
</head>
<body> 
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-text-bottom" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ecommerce.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file align-text-bottom" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Data Perushaan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="datapengguna.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart align-text-bottom" aria-hidden="true"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                  Data Checkout
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="datapengguna.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-text-bottom" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Data Pengguna
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pesankamar.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2 align-text-bottom" aria-hidden="true"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Trafic Penjualan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="forminput.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers align-text-bottom" aria-hidden="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                  Form Input
                </a>
              </li>
            </ul>
    
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
              <span>Menu Admin</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-text-bottom" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
              </a>
            </h6>
          </div>
        </nav>
    
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">WELKAM BEK CUY</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary"> <a href="../index.html">Sign Out</a></button>
                <button type="button" class="btn btn-sm btn-outline-secondary"> <a href="pesankamar.html">Pesan</a></button>
              </div>
              <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar align-text-bottom" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                This week
              </button>
            </div>
          </div>

          <div class="album py-5 bg-light">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="img/keranjang.jpg" width="100%" height="225" >
        
                    <div class="card-body">
                      <p class="card-text">Dalam minnu ini kita sudah berhasil menjual banyak sekali barang
                        dan meraup keuntungna cukup besar, pertahankan prestasi ini agar peerusahaan kita semakin maju
                      </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary"><a href="datakamar.html">Lihat</a></button>
                          <button type="button" class="btn btn-sm btn-outline-secondary"><a href="pesankamar.html">Pesan</a></button>
                        </div>
                        <small class="text-muted">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="img/orang.png" width="100%" height="225"> 
        
                    <div class="card-body">
                      <p class="card-text"> Dari laporan yang diterima, ada sekitar 200rb pengguna baru setiap bulan nya,
                        ini prestasi yang bagus untuk perusahaan kita, terus berjuang cuy biar cuan
                      </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary"><a href="datakamar.html">Lihat</a></button>
                          <button type="button" class="btn btn-sm btn-outline-secondary"><a href="pesankamar.html">Pesan</a></button>
                        </div>
                        <small class="text-muted">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="img/naik.png" width="100%" height="225"> 
        
        
                    <div class="card-body">
                      <p class="card-text">Trafic penjualan meningkat drastis dalam kurun waktu 6 bulan ini
                        banyak sekali pembeli dan penjual yang mengggunakan jasa layanan e-commerce kita
                        cuan cuan cuan cuyy
                      </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary"><a href="datakamar.html">Lihat</a></button>
                          <button type="button" class="btn btn-sm btn-outline-secondary"><a href="pesankamar.html">Pesan</a></button>
                        </div>
                        <small class="text-muted">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
    
          <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="780" height="328" style="display: block; width: 390px; height: 164px;"></canvas>

          <h2 class="display-6 text-center mb-4">BAROKAH SHOP</h2>
    
          <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
              <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">PAKAIAN</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">MENINGKAT<small class="text-muted fw-light">/6 bulan</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>Tersedia berbagai macam pakaian</li>
                      <li>Penjualan pakaian meningkat</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Cek Statistic</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">ELEKTRONIK</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">MENINGKAT<small class="text-muted fw-light">/6 bulan</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>Alat elektronik berkualitas</li>
                      <li>Penjualan meningkat</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Cek Statistik</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                  <div class="card-header py-3 text-bg-primary border-primary">
                    <h4 class="my-0 fw-normal">SMARTPHONE</h4>
                  </div>
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">MENINGKAT<small class="text-muted fw-light">/6 bulan</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>Tersedia berbagai macam handphone</li>
                      <li>Penjualan meningkat</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Cek Statistik</button>
                  </div>
                </div>
              </div>
            </div>
        
          
          <div class="container">
            <footer class="py-3 my-4">
              <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Terima Kasih</a></li>
              </ul>
              <p class="text-center text-muted">©barokahshop, Mario Bhona Parte</p>
            </footer>
          </div>
    
          
      <script src="js/bootstrap.min.js"></script>
</body>
</html>