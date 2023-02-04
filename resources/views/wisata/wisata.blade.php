@extends('layout.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  @if (Route::is('dashboard'))
  <a type="button" class="btn btn-primary"  href="/dashboard/wisata/create" >Tambah data</a>
  @else
  
  @endif
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Kota</th>
        <th scope="col">Handle</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    @php
        $no = $wisatas->firstItem();
    @endphp
    @foreach ($wisatas as $wisata)
    <tbody>
      <tr>
        <th scope="row">{{$no++}}</th>
        <td>{{$wisata->name}}</td>
        <td>{{$wisata->location->city}}</td>
        <td>{{$wisata->price}}</td>
        <td>
          @if (Route::is('dashboard'))
            <a type="button" class="btn btn-primary"  href="/dashboard/wisata/detail/{{$wisata->name}}" >Detail</a>
          @else
            <a type="button" class="btn btn-primary"  href="/wisata/detail/{{$wisata->name}}" >Detail</a>
          @endif
          @if (Route::is('dashboard'))
            <a type="button" class="btn btn-primary"  href="/dashboard/wisata/edit/{{$wisata->id}}" >Edit</a>
          @else
          
          @endif
          @if (Route::is('dashboard'))
          <form action="/dashboard/wisata/delete/{{ $wisata->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Yakin Untuk Menghapus {{$wisata->name}}?')">Hapus</button>
          </form>
          @else

          @endif
      </td>
      </tr>
    </tbody>
    @endforeach
  </table>
  @if (Route::is('dashboard'))
    <div class="mt-100">{!! $wisatas->links() !!}</div>
  @else
      
  @endif
</main>
{{-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/witeng-style.css" rel="stylesheet" />
  </head>
  
</html> --}}
@endsection