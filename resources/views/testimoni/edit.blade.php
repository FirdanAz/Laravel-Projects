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
                <form method="post" action="/testimoni/update/{{$testimoni->id}}">
                    @csrf
                    <h1 id="register">Tambah Data Wisata</h1>
                    <div class="all-steps" id="all-steps"> 
                      <span class="step"><i class="fa-solid fa-torii-gate"></i></span> 
                      <span class="step"><i class="fa fa-map-marker"></i></span>
                      <span class="step"><i class="fa-regular fa-clock"></i></span>
                    </div>
    
                    <div class="tab">
                      <h6>Nama Wisata</h6>
                        <p>
                          <input placeholder="Masukan Nama Wisata..." oninput="this.className = ''" name="name" class="test" required id="name" value="{{old('name', $testimoni->name)}}"></p>
                        
                    </div>
                    <div class="tab">
                        <h6>Deskripsi</h6>
                          <p>
                            <input placeholder="Masukan Deskripsi..." oninput="this.className = ''" name="message" class="test" required id="message" value="{{old('message', $testimoni->message)}}"></p>
                          
                    </div>
                    <div class="tab">
                        <h6>Deskripsi singkat</h6>
                          <p>
                            <input placeholder="Masukan Deskripsi singkat lokasi..." oninput="this.className = ''" name="address" class="test" required id="address" value="{{old('address', $testimoni->address)}}"></p>
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