<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ActiveFit & FiteBite</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    .search-box {
      position: relative;
    }

    .search-box i {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      right: 10px;
      color: #aaa;

    }

    .letter-a {
      position: absolute;
      top: -15px;
      right: 15px;
      font-size: 30px;
      border-radius: 50%;
      background-color: #28a745;
      padding: 5px 10px;
      color: #fff; 
    }

    hr {
        background-color: gray;
    }

    .rounded-circle-custom {
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        text-align: center;
    }

    .navbar-dark .nav-link {
        color: #ffffff;
        transition: color 0.3s ease, background-color 0.3s ease; 
    }

    .navbar-dark .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1); 
        border-radius: 5px; 
    }

    
    .navbar-dark .nav-link:last-child:hover {
        color: #b71c1c; 
    }

    .navbar-dark .nav-link:last-child {
        font-weight: bold; 
    }

    .rounded-circle-custom {
        width: 50px; 
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%; 
        background-color: #800000; 
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .rounded-circle-custom:hover {
        background-color: #a52a2a; 
        color: #ffffff;
    }

    .rounded-circle-custom i {
        color: #ffffff; 
    }

    .card {
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
    
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .card-title,
    .card-text {
        color: #000000; 
    }

    
    .btn-custom {
        background-color: #6c757d;
        color: #FFFFFF;
    }
    
    .btn-outline-primary {
        background-color: transparent;
        color: #800000; 
        border: 2px solid #800000;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    }

    .btn-outline-primary:hover{
        background-color: #800000;
        color: #FFFFFF; 
        border-color: #800000;
    }


    .btn-outline-primary:focus,
    .btn-outline-primary:active {
        background-color: #800000;
        color: #FFFFFF;
        border: 2px solid #800000;
        outline: none;
        box-shadow: none;
    }
    
    .btn-info {
        background-color: #a52a2a;
        color: white;
        border: none;
    }

    .btn-info:hover,
    .btn-info:focus,
    .btn-info:active {
        background-color: #800000;
        color: #FFFFFF;
        box-shadow: none;
    }

  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="height: 90px; background-color: #000000;">
  <div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between">
      <a class="navbar-brand" href="#" target="_blank" style="font-weight: bold; font-size: 1.5rem; color: #FFFFFF; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);">
        ActiveFit.com & FiteBite.com
      </a>

      <form class="d-flex">
        <div class="input-group search-box">
          <input class="form-control" type="search" placeholder="Ciptakan Pola Hidup Sehat Disini" aria-label="Search" style="width: 400px;">
          <i class="fas fa-search"></i>
        </div>
      </form>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mr-3">
          <a class="nav-link active" href="#" target="_blank">Beranda</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link active" href="#" target="_blank">Artikel</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link active" href="#" target="_blank">Komunitas</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link active" href="#" target="_blank">Course Latihan     |</a>
        </li>
        <li class="nav-item mr-2">
          <a class="nav-link active" href="#">Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Daftar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main>
  <div class="container-fluid py-4" style="background-image: url(./foto/F1AF.jpeg); min-height: 800px; background-repeat: no-repeat; background-size: cover; background-position: center;">
      <div class="container">
          <div class="row justify-content-center mb-5" style="margin-top: 98px;">
              <div class="col-md-5 mb-4">
                  <div class="card shadow-lg border-0 rounded-lg" style="background-color: #000000; color: #FFFFFF;">
                      <img src="https://i.pinimg.com/736x/29/da/10/29da10d35e48ea9fbc5a15cd58c907be.jpg" class="card-img-top rounded-top" alt="...">
                      <div class="card-body">
                          <button type="button" class="btn btn-info btn-sm mb-2">Use Case 1</button>
                          <h5 class="card-title" style="color: #FFFFFF">Olahraga untuk Mendapatkan Reward Diskon Makanan</h5>
                          <p class="card-text" style="color: #FFFFFF"><b>Laquisha Dinara Safie</b> | 225150607111009</p>
                          <a href="dinara2/xhome.html" class="btn btn-outline-danger">Coba Sekarang</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-5 mb-4">
                  <div class="card shadow-lg border-0 rounded-lg" style="background-color: #000000; color: #FFFFFF;">
                      <img src="https://i.pinimg.com/736x/62/59/0d/62590d890719756bf5c2d6d502ddbb7b.jpg" class="card-img-top rounded-top" alt="...">
                      <div class="card-body">
                          <button type="button" class="btn btn-info btn-sm mb-2">Use Case 2</button>
                          <h5 class="card-title" style="color: #FFFFFF">Akses Kursus Olahraga Eksklusif Berdasarkan Pembelian Produk/Makanan</h5>
                          <p class="card-text" style="color: #FFFFFF"><b>M.Fahmi Kurniawan</b> | 225150600111014</p>
                          <a href="FiteBite-VersionRest/touchpoint.html" class="btn btn-outline-danger">Coba Sekarang</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-5 mb-4">
                  <div class="card shadow-lg border-0 rounded-lg" style="background-color: #000000; color: #FFFFFF;">
                      <img src="https://i.pinimg.com/736x/7d/95/65/7d9565c124eb539182a9c4326b1623c0.jpg" class="card-img-top rounded-top" alt="...">
                      <div class="card-body">
                          <button type="button" class="btn btn-info btn-sm mb-2">Use Case 3</button>
                          <h5 class="card-title" style="color: #FFFFFF">Pembatasan Akses Sistem Asupan Makan Berdasarkan Penggunaan Tracker Olahraga</h5>
                          <p class="card-text" style="color: #FFFFFF"><b>Ummamah Izzy Irham</b> | 225150607111003</p>
                          <a href="PROYEK_TST/soapclientus3/home.html" class="btn btn-outline-danger">Coba Sekarang</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-5 mb-4">
                  <div class="card shadow-lg border-0 rounded-lg" style="background-color: #000000; color: #FFFFFF;">
                      <img src="https://i.pinimg.com/736x/35/48/22/354822fa6e0d12efb220753f2bb0ae4a.jpg" class="card-img-top rounded-top" alt="...">
                      <div class="card-body">
                          <button type="button" class="btn btn-info btn-sm mb-2">Use Case 4</button>
                          <h5 class="card-title" style="color: #FFFFFF">Mengatur Target Aktivitas Berdasarkan Asupan Makanan</h5>
                          <p class="card-text" style="color: #FFFFFF"><b>Athallarifky Pasha Yanuar</b> | 215150607111013</p>
                          <a href="activityTargetApi/index.html" class="btn btn-outline-danger">Coba Sekarang</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>

<footer>
  <div class="container-fluid py-5" style="height: 325px; padding-top: 40px; background-color: #000000;">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-4">
                  <h5 class="text-light ml-3"><b>ActiveFit.com</b></h5>
                  <a class="nav-link active text-light" href="#" target="_blank">Beranda</a>
                  <a class="nav-link active text-light" href="#" target="_blank">Course Latihan</a>
                  <a class="nav-link active text-light" href="#" target="_blank">Artikel</a>
                  <a class="nav-link active text-light" href="#" target="_blank">Komunitas</a>
                  <a class="nav-link active text-light" href="#" target="_blank">Course Khusus</a>
              </div>

              <div class="col-4">
                  <h5 class="text-light ml-3"><b>Lainnya</b></h5>
                  <a class="nav-link active text-light" href="#">Syarat & Ketentuan</a>
                  <a class="nav-link active text-light" href="#">Privasi</a>
                  <a class="nav-link active text-light" href="#">Iklan</a>
                  <a class="nav-link active text-light" href="#">Komunitas</a>
                  <a class="nav-link active text-light" href="#">Gabung di Tim ActiveFit</a>
              </div>

              <div class="col-4">
              <h5 class="text-light mb-3"><b>Media Sosial</b></h5>
                  <div class="d-flex align-items-center mt-0.7">
                      <a href="#" class="mr-2 text-decoration-none rounded-circle-custom">
                      <i class="mt-1 fab fa-facebook-f" style="font-size: 1.5em;"></i>
                      </a>
                      <a href="#" class="mr-2 text-decoration-none rounded-circle-custom">
                      <i class="mt-2 fab fa-twitter" style="font-size: 1.5em;"></i>
                      </a>
                      <a href="#" class="mr-2 text-decoration-none rounded-circle-custom">
                      <i class="mt-2 fab fa-linkedin-in" style="font-size: 1.5em;"></i>
                      </a>
                      <a href="#" class="mr-2 text-decoration-none rounded-circle-custom">
                      <i class="mt-2 fab fa-instagram" style="font-size: 1.5em;"></i>
                      </a>
                      <a href="#" class="mr-2 text-decoration-none rounded-circle-custom">
                      <i class="mt-2 fab fa-youtube" style="font-size: 1.5em;"></i>
                      </a>
                  </div>
              </div>
          </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>