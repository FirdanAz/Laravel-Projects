@extends('layout.main')

<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="bd-placeholder-img" width="100%" height="100%" src="img/banner-1.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Toko Buku Modern</h1>
          <p>Toko buku original dan terlengkap</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%" height="100%" src="img/banner-1.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%" fill="#777">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Cari buku original dan terlengkap?</h1>
          <p>Di toko buku modern menyediakan banyak buku original dan terlengkap.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="bd-placeholder-img" width="100%" height="100%" src="img/banner-1.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%" fill="#777">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Toko Buku Modern</h1>
          <p>Toko buku original dan terlengkap</p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
  <!-- START THE FEATURETTES -->

<div class="row featurette">
<div class="col-md-7 order-md-2">
  <h2 class="featurette-heading fw-normal lh-1">Ayo baca buku.</h2>
  <p class="lead pt-3">"Buku adalah pembawa peradaban. Tanpa buku, sejarah itu sunyi, sastra itu bodoh, sains lumpuh, pemikiran dan spekulasi terhenti. Buku adalah mesin perubahan, jendela di dunia, mercusuar yang didirikan di lautan waktu." - Barbara W. Tuchman</p>
</div>
<div class="col-md-5 order-md-1">
  <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="img/banner-2.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%" fill="#eee"><title>Placeholder</title>
</div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->
</div>

{{-- 
<div id="hero" class="hero-section">
  <div class="intro">
      <h1 class="text-white intro-text">Selamat Datang Di<br> Toko Buku Modern</h1>
  </div>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
      <h2 class="display-6 text-center pt-5"><b>Toko Buku Modern</b></h2>
      <p class="lead text-center pt-2 fs-4 pb-5">Toko buku original dan terlengkap</p>
  </div>
</div> --}}
