@extends('layout.main')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/wisata.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7b27134977.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/js/wisata.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/css/witeng-style.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <form method="post" enctype="multipart/form-data" action="/wisata/add">
                    @csrf
                    <h1 id="register">Tambah Data Wisata</h1>
                    <div class="all-steps" id="all-steps"> 
                      <span class="step"><i class="fa-solid fa-torii-gate"></i></span> 
                      <span class="step"><i class="fa-sharp fa-solid fa-book"></i></span>
                      <span class="step"><i class="fa-sharp fa-solid fa-book"></i></span>
                      <span class="step"><i class="fa-solid fa-star"></i></span>
                      <span class="step"><i class="fa-solid fa-ticket"></i></span>
                      <span class="step"><i class="fa-solid fa-location-dot"></i></span>
                      <span class="step"><i class="fa-solid fa-location-dot"></i></span>
                      <span class="step"><i class="fa-regular fa-clock"></i></span>
                      <span class="step"><i class="fa-regular fa-clock"></i></span>
                      <span class="step"><i class="fa-sharp fa-solid fa-book"></i></span>
                    </div>
    
                    <div class="tab">
                      <h6>Nama Wisata</h6>
                        <p>
                          <input placeholder="Masukan Nama Wisata..." oninput="this.className = ''" name="name" class="test" required id="name"></p>
                        
                    </div>
                    <div class="tab">
                        <h6>Deskripsi</h6>
                          <p>
                            <input placeholder="Masukan Deskripsi..." oninput="this.className = ''" name="description" class="test" required id="description"></p>
                          
                    </div>
                    <div class="tab">
                        <h6>Deskripsi singkat</h6>
                          <p>
                            <input placeholder="Masukan Deskripsi singkat lokasi..." oninput="this.className = ''" name="desc" class="test" required id="desc"></p>
                          
                    </div>
                    <div class="tab">
                        <h6>Rating</h6>
                          <p>
                            <input type="number" placeholder="Masukan Rating..." oninput="this.className = ''" name="rate" class="test" required id="rate"></p>
                          
                    </div>
                    <div class="tab">
                        <h6>Harga</h6>
                          <p>
                            <input type="number" placeholder="Masukan Harga Tiket..." oninput="this.className = ''" name="price" class="test" required id="prize"></p>
                          
                    </div>
                    <div class="tab">
                        <h6>Alamat</h6>
                          <p>
                            <input placeholder="Masukan Harga Tiket..." oninput="this.className = ''" name="address" class="test" required id="address"></p>
                          
                    </div>
                    <div class="tab">
                        <select class="form-select" name="location_id" id="">
                            @foreach ($location as $location)
                            <option name="location_id" value="{{ $location->id}}">{{ $location->city }}</option>
                            @endforeach
                        </select>
                    </div> 
                    <div class="tab">
                        <h6>Jam Buka</h6>
                          <p>
                            <input type="time" placeholder="Masukan Jam Buka..." oninput="this.className = ''" name="open_time" class="test" required id="open_time"></p>
                          
                    </div>
                    <div class="tab">
                        <h6>Jam Tutup</h6>
                          <p>
                            <input type="time" placeholder="Masukan Jam Tutup..." oninput="this.className = ''" name="close_time" class="test" required id="close_time"></p>
                          
                    </div>
                    <div class="tab">
                      <h6>Foto</h6>
                        <p>
                          <input type="file" placeholder="Masukan Foto..." name="foto"></p>
                        
                  </div>
                    <div class="thanks-message text-center" id="text-message"> 
                        <img src="/img/verified-symbol-icon.svg" width="100" class="mb-4">
                        <h3>Data Berhasil Di Tambahkan</h3>
                        <button type="submit">Back</button>
                    </div>
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;">
                          <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> 
                          <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection