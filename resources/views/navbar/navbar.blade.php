<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="/css/navbar.css">
  </head>
  <body>
    <nav>
      <a href="" class="logoo"><span>WiTeng</span></a>

      <ul class="navbarr">
          <li><a href="/home" class="active">Beranda</a></li>
          <li><a href="/wisata">Wisata</a></li>
          <li><a href="/city">Kota</a></li>
          <li><a href="/testimoni">Testimoni</a></li>
      </ul>

      @auth
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: rgb(237, 221, 0); height: 40px; font-size: 13px">
            Hi, {{auth()->user()->name}}
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard/home" style="color: black; font-size: 12px">Dashboard</a></li>
            <form action="/login/logout" method="post">
              @csrf
              <li style=" margin-left: 10px"><button type="submit" class="dropdown-item" style="color: red; font-size: 12px;">Logout</button></li></form>
          </ul>
        </div>
      @else
      <div class="mainn">
        <a href="/login" class="userr">Login</a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
    @endauth
      
  </nav>
  </body>
</html>