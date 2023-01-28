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
    @if (Route::is('dashboard'))
    <a type="button" class="btn btn-primary"  href="/wisata/create" >Tambah data</a>
    @else
    
    @endif
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nama</th>
          <th scope="col">Kota</th>
          <th scope="col">Handle</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      @foreach ($wisatas as $wisata)
      
      <tbody>
        <tr>
          <th scope="row">{{$wisata->id}}</th>
          <td>{{$wisata->name}}</td>
          <td>{{$wisata->location->city}}</td>
          <td>{{$wisata->price}}</td>
          <td>
            <a type="button" class="btn btn-primary"  href="/wisata/detail/{{$wisata->name}}" >Detail</a>
            @if (Route::is('dashboard'))
              <a type="button" class="btn btn-primary"  href="/wisata/edit/{{$wisata->id}}" >Edit</a>
            @else
            
            @endif
            @if (Route::is('dashboard'))
            <form action="/wisata/delete/{{ $wisata->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger" onclick="return confirm('Are You Sure?')">Hapus</button>
            </form>
            @else

            @endif
        </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </body>
</html>
@endsection