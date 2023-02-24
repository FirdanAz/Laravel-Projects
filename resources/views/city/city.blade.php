@extends('layout.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <a type="button" class="btn btn-primary mt-3"  href="/city/create" >Tambah Kota</a>
  <table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nama Kota</th>
        <th scope="col">Provinsi</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Wisata</th>
      </tr>
    </thead>
    @foreach ($locations as $location)
    <tbody>
      <tr>
        <th scope="row">{{$location->id}}</th>
        <td>{{$location->city}}</td>
        <td>{{$location->provinsi}}</td>
        <td>{{$location->desc}}</td>
        <td>
          @foreach ($location->wisata as $wisata)
            <ul>
              <li>
                {{ $wisata->name }}
              </li>
            </ul>
        @endforeach
          </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</main>
{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/witeng-style.css" rel="stylesheet" />
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <a type="button" class="btn btn-primary"  href="/city/create" >Tambah Kota</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nama Kota</th>
          <th scope="col">Provinsi</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Wisata</th>
        </tr>
      </thead>
      @foreach ($locations as $location)
      <tbody>
        <tr>
          <th scope="row">{{$location->id}}</th>
          <td>{{$location->city}}</td>
          <td>{{$location->provinsi}}</td>
          <td>{{$location->desc}}</td>
          <td>
            @foreach ($location->wisata as $wisata)
              <ul>
                <li>
                  {{ $wisata->name }}
                </li>
              </ul>
          @endforeach
            </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </body>
</html> --}}
@endsection