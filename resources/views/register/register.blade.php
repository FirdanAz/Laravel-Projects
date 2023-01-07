<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/register.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="/register/create">
        @csrf
        <h3>Daftar Akun</h3>

        <label for="name">Username</label>
        <input name="name" type="name" id="name" placeholder="Email or Phone">

        <label for="email">Email</label>
        <input name="email" type="email" id="email" placeholder="Email or Phone">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password">

        <a href="/login/" class="btn-to-reg">Sudah Punya Akun? klik</a> 
        <button>Daftar</button>
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
    </form>
</body>
</html>