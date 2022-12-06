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
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <div class="mb-3">
      <label class="mb-2">Nama Wisata</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ $wisatas->name }}" readonly>
    </div>
    <div class="mb-3">
      <label class="mb-2">Kota</label>
      <input type="text" class="form-control" id="city" name="city" value="{{ $wisatas->city }}" readonly>
    </div>
    <div class="mb-3">
      <label class="mb-2">Deskripsi</label>
      <input type="text-area" class="form-control" id="name" name="name" value="{{ $wisatas->description }}" readonly>
    </div>
  </body>
</html>
@endsection