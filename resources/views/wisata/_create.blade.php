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
    <link rel="stylesheet" href="/css/witeng-style.css">
    <script src="https://kit.fontawesome.com/7b27134977.js" crossorigin="anonymous"></script>
</head>
<body>
    <form method="post" action="/wisata/add">
        @csrf
        <div class="mb-2">
          <label for="name">Nama Wisata</label>
          <input type="text" class="form-control" required id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-2">
            <label for="description">Deskripsi</label>
            <input type="text" class="form-control" required id="description" name="description" value="{{ old('description') }}">
          </div>
          <div class="mb-2">
            <label for="desc">Deskripsi singkat</label>
            <input type="text" class="form-control" required id="desc" name="desc" value="{{ old('desc') }}">
          </div>
          <div class="mb-2">
            <label for="rate">Rating</label>
            <input type="number" class="form-control" required id="rate" name="rate" value="{{ old('rate') }}">
          </div>
          <div class="mb-3">
            <label for="price">Harga</label>
            <input type="text" class="form-control" required id="price" name="price" value="{{ old('price') }}">
          </div>
          <div class="mb-3">
            <label for="address">Alamat</label>
            <input type="text" class="form-control" required id="address" name="address" value="{{ old('address') }}">
          </div>
          <div class="mb-3">
            <label for="location">Location</label>
            <select class="form-select" name="location_id" id="">
                @foreach ($location as $location)
                <option name="location_id" value="{{ $location->id}}">{{ $location->city }}</option>
                @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="open_time">Jam Buka</label>
            <input type="time" class="form-control" required id="open_time" name="open_time" value="{{ old('open_time') }}">
          </div>
          <div class="mb-3">
            <label for="close_time">Jam Tutup</label>
            <input type="time" class="form-control" required id="close_time" name="close_time" value="{{ old('close_time') }}">
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
      </form>
</body>
</html>
@endsection