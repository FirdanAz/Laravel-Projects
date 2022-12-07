@extends('layout.main')

@section('content')
<!doctype html>
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
    <a type="button" class="btn btn-primary"  href="/wisata/create" >Add Data</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nama</th>
          <th scope="col">Kota Pengguna</th>
          <th scope="col">Pesan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      @foreach ($testimonis as $testimoni)
      
      <tbody>
        <tr>
          <th scope="row">{{$testimoni->id}}</th>
          <td>{{$testimoni->name}}</td>
          <td>{{$testimoni->address}}</td>
          <td>{{$testimoni->message}}</td>
          <td>
            <a type="button" class="btn btn-primary"  href="/testimoni/edit/{{$testimoni->id}}">Edit</a>
            <form action="/testimoni/delete/{{ $testimoni->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger" onclick="return confirm('Are You Sure?')">Hapus</button>
            </form>
        </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </body>
</html>
@endsection