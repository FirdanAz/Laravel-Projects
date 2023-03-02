@extends('layout.main')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/witeng-style.css">
    <link rel="stylesheet" href="/css/detail.css">
    <script src="https://kit.fontawesome.com/7b27134977.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="intro-detail">
        <h1 class="tittle-intro"><span class="kota-tujuan">Selamat Datang </span> Di Wisata <span class="kota-tujuan">{{$wisatas->name}}</span></h1>
    </div>
    <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(244, 244, 244, 1)" offset="0%"></stop><stop stop-color="rgba(255, 255, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,70L12,61.7C24,53,48,37,72,26.7C96,17,120,13,144,25C168,37,192,63,216,73.3C240,83,264,77,288,76.7C312,77,336,83,360,76.7C384,70,408,50,432,38.3C456,27,480,23,504,23.3C528,23,552,27,576,28.3C600,30,624,30,648,36.7C672,43,696,57,720,65C744,73,768,77,792,68.3C816,60,840,40,864,26.7C888,13,912,7,936,13.3C960,20,984,40,1008,45C1032,50,1056,40,1080,43.3C1104,47,1128,63,1152,66.7C1176,70,1200,60,1224,61.7C1248,63,1272,77,1296,71.7C1320,67,1344,43,1368,30C1392,17,1416,13,1440,25C1464,37,1488,63,1512,76.7C1536,90,1560,90,1584,90C1608,90,1632,90,1656,78.3C1680,67,1704,43,1716,31.7L1728,20L1728,100L1716,100C1704,100,1680,100,1656,100C1632,100,1608,100,1584,100C1560,100,1536,100,1512,100C1488,100,1464,100,1440,100C1416,100,1392,100,1368,100C1344,100,1320,100,1296,100C1272,100,1248,100,1224,100C1200,100,1176,100,1152,100C1128,100,1104,100,1080,100C1056,100,1032,100,1008,100C984,100,960,100,936,100C912,100,888,100,864,100C840,100,816,100,792,100C768,100,744,100,720,100C696,100,672,100,648,100C624,100,600,100,576,100C552,100,528,100,504,100C480,100,456,100,432,100C408,100,384,100,360,100C336,100,312,100,288,100C264,100,240,100,216,100C192,100,168,100,144,100C120,100,96,100,72,100C48,100,24,100,12,100L0,100Z"></path></svg>
    <div class="body">
        <div class="container-detail">
            <div class="card">
                <div class="box">
                    <div class="content">
                        <h2><i class="fa-solid fa-clock"></i></h2>
                        <h3>Jam Operasional</h3>
                        <p><span class="jam-buka">{{$wisatas->open_time}}</span> - <span class="jam-tutup">{{$wisatas->close_time}}</span></p>
                    </div>
                </div>
            </div>
      
            <div class="card">
                <div class="box">
                    <div class="content">
                    <h2><i class="fa-solid fa-ticket"></i></h2>
                    <h3>Harga Tiket Masuk</h3>
                    <p><span class="harga-tiket">{{$wisatas->price}}</span></p>
                    </div>
                </div>
            </div>
      
            <div class="card">
                <div class="box">
                    <div class="content">
                    <h2><i class="fa fa-map-marker"></i></h2>
                    <h3>Lokasi Tempat Wisata</h3>
                    <p>{{$wisatas->address}}</p>
                    <!-- <a href="#">Read More</a> -->
                    </div>
                </div>
            </div>
      </div>
    </div>
    <div class="deskripsi-detail">
        <h1 class="tittle-deskripsi">Wisata <span class="kota-tujuan">{{$wisatas->name}}</span></h1>
        <div class="con-desk">
            <div class="gambar-desc">
                <img src="{{asset('storage/' . $wisatas->foto)}}" alt="" class="img-deskripsi">
            </div>
            <p class="text-deskripsi">{{$wisatas->description}}</p>
        </div>
        
    </div>

    <footer class="tm-black-bg">
        <div class="container">
          <div class="row">
            <p class="tm-copyright-text">
              Copyright &copy; 2022 - Wisata Jawa Tengah Indonesia
            </p>
          </div>
        </div>
    </footer>

    <div class="cursor"></div>
    <div class="cursorInner"></div>
    <!-- progress-bar and btn to top -->
    <div class="progresss-bar">

    <script src="./js/detail.js"></script>
</body>
</html>
@endsection