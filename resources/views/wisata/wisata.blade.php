@extends('layout.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
  @if (Route::is('dashboard'))
  <a type="button" class="btn btn-primary mt-3"  href="/dashboard/wisata/create" >Tambah data</a>
  <div class="col-md-10">
    <form action="/dashboard/wisata/" style="display: flex">
      <div class="col-md-4">
          <select class="form-select" name="location" id="">
              <option name="location" value="0"> -- Semua Wisata--</option>
              @foreach ($location as $item)
              @if (request('location') == $item->id)
                <option name="location" value="{{ $item->id }}" selected>{{ $item->city }}</option>
              @else
                <option name="location" value="{{ $item->id }}">{{ $item->city }}</option>
              @endif
              @endforeach
          </select>
      </div>
      <div class="col-md-8">
          <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request()->input('search') }}">
              <button class="btn btn-dark" type="submit" id="search">Search</button>
          </div>
      </div>
  </form>
  </div>
  @else
  
  @endif
  <table class="table" 
  @if (Route::is('dashboard')) 
  
  @else
  style="margin-top: 100px;"
  @endif>
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Kota</th>
        <th scope="col">Harga Tiket</th>
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