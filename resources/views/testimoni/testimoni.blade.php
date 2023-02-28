@extends('layout.main')

@section('content')
<main @if (Route::is('dashboard'))
    class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-10"
@else
    
@endif>
@if (Route::is('dashboard'))
    <a type="button" class="btn btn-primary mt-3"  href="/home" >Tambah testimoni</a>
  @else
      
  @endif
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <table class="table" @if (Route::is('dashboard'))
        style="margin-top: 10px;"
    @else
    style="margin-top: 60px"
    @endif>
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nama</th>
          <th scope="col">Kota Pengguna</th>
          <th scope="col">Pesan</th>
          @if (Route::is('dashboard'))
              <th scope="col" style="width: 150px">Aksi</th>
          @else
              
          @endif
        </tr>
      </thead>
      @foreach ($testimonis as $testimoni)
      <tbody>
        <tr>
          <th scope="row">{{$testimoni->id}}</th>
          <td>{{$testimoni->name}}</td>
          <td>{{$testimoni->address}}</td>
          <td>{{$testimoni->message}}</td>
          @if (Route::is('dashboard'))
              <td>
                <a type="button" class="btn btn-primary"  href="/testimoni/edit/{{$testimoni->id}}">Edit</a>
                <form action="/testimoni/delete/{{ $testimoni->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are You Sure?')">Hapus</button>
                </form>
              </td>
          @else
              
          @endif
        </tr>
      </tbody>
      @endforeach
    </table>
</main>
@endsection