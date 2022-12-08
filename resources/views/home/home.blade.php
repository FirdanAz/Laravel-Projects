@extends('layout.main')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WiTeng - Wisata Jateng</title>
    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700"
      rel="stylesheet"
      type="text/css"
    />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/witeng-style.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
  </head>
  <body class="tm-gray-bg example">
    <section class="tm-banner">
      <!-- Flexslider -->
      <div class="flexslider flexslider-banner">
        <ul class="slides">
          <li>
            <div class="tm-banner-inner">
              <h1 class="tm-banner-title">
                Find <span class="tm-yellow-text">The Best</span> Place
              </h1>
              <p class="tm-banner-subtitle">For Your Holidays</p>
              <a href="#more" class="tm-banner-link">Learn More</a>
            </div>
            <img src="img/banner-1.jpg" alt="Image" />
          </li>
          <li>
            <div class="tm-banner-inner">
              <h1 class="tm-banner-title">
                Jawa <span class="tm-yellow-text">Tengah</span> Indonesia
              </h1>
              <p class="tm-banner-subtitle">Wonderful Destinations</p>
              <a href="#more" class="tm-banner-link">Learn More</a>
            </div>
            <img src="img/banner-2.jpg" alt="Image" />
          </li>
        </ul>
      </div>
    </section>

    <!-- gray bg -->
    <section class="container tm-home-section-1" id="more">
      <div class="row">
        <!-- start foreach -->
         @foreach ($wisatas as $location)
         <div class="col-lg-4 col-md-4 col-sm-6"> <!-- ini card -->
          <div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
            <img src="{{ asset('storage/' . $location->foto) }}" alt="image" class="img-responsive" />
            <a href="/home/detail/{{$location->name}}">
              <div class="tm-grey-gradient-bg tm-city-price-container">
                <span>{{$location->name}}</span>
                <span>Rp.{{$location->price}}</span>
              </div>
            </a>
          </div>
        </div>
         @endforeach
        <!-- end -->
      </div>
    </section>

    <!-- white bg -->
    <section class="tm-white-bg section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="tm-section-header section-margin-top">
            <div class="col-lg-4 col-md-3 col-sm-3"><hr /></div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <h2 class="tm-section-title">Popular Packages</h2>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3"><hr /></div>
          </div>
          <!-- start foreach -->
          @foreach ($wisatas as $location)
          <div class="col-lg-6">
            <div class="tm-home-box-3">
              <div class="tm-home-box-3-img-container">
                <img
                  src="{{ asset('storage/' . $location->foto) }}"
                  alt="image"
                  class="img-responsive"
                />
              </div>
              <div class="tm-home-box-3-info">
                <p class="tm-home-box-3-description">
                  {{$location->desc}}
                </p>
                <div class="tm-home-box-2-container">
                  <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                  <a href="/home/detail/{{$location->name}}" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Selengkapnya</span></a>
                  <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- end -->
        </div>
      </div>
    </section>
    <div class="testimonial">
      <h1 class="tittle-testimonial">Testimonial Masyarakat</h1>
      <!-- start foreach -->
      @foreach ($testimonis as $wisata)
      <figure class="snip1533">
        <figcaption>
          <blockquote>
            <p>{{$wisata->message}}</p>
          </blockquote>
          <h3>{{$wisata->name}}</h3>
          <h4>Warga {{$wisata->address}}</h4>
        </figcaption>
      </figure>
      @endforeach
    <!-- end -->
    </div>
    <div class="con-contact" id="contact">
      <h1 class="tittle-contact">Berikan Testimoni</h1>
          <div class="container-contact">
          <div class="screen-contact">
            <div class="screen-header-contact">
              <div class="screen-header-left-contact">
                <div class="screen-header-button-contact close"></div>
                <div class="screen-header-button-contact maximize"></div>
                <div class="screen-header-button-contact minimize"></div>
              </div>
              <div class="screen-header-right-contact">
                <div class="screen-header-ellipsis-contact"></div>
                <div class="screen-header-ellipsis-contact"></div>
                <div class="screen-header-ellipsis-contact"></div>
              </div>
            </div>
            <div class="screen-body-contact">
              <div class="screen-body-item-contact left">
                <div class="app-title-contact">
                  <span>Kirim</span>
                  <span>Komentar</span>
                </div>
                <div class="app-contact-contact">CONTACT INFO : +6280000000000</div>
              </div>
              <!-- ini form -->
                <form method="post" action="/home/add" class="screen-body-item-contact" id="form-testi">
                  @csrf
                  <div class="app-form-contact">
                    <div class="app-form-group-contact">
                      <input name="name" class="app-form-control-contact" placeholder="Nama Pengirim">
                    </div>
                    <div class="app-form-group-contact">
                      <input name="address" class="app-form-control-contact" placeholder="Asal Pengirim">
                    </div>
                    <div class="app-form-group-contact">
                      <input name="message" class="app-form-control-contact" placeholder="Pesan">
                    </div>
                    <div class="app-form-group buttons-contact">
                      <button class="app-form-button-contact" id="cancel-testimonial">CANCEL</button>
                      <button class="app-form-button-contact" type="submit">SEND</button>
                    </div>
                  </div>
                </form>
              <!-- end form -->
            </div>
          </div>
        </div>
      </div>
    <footer class="tm-black-bg">
      <div class="container">
        <div class="row">
          <p class="tm-copyright-text">
            Copyright &copy; 2022 - Wisata Jawa Tengah Indonesia
          </p>
        </div>
      </div>
    </footer>

    <div class="cursor"></div>
    <div class="cursorInner"></div>
    <!-- progress-bar and btn to top -->
    <div class="progresss-bar">
    </div>
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="js/moment.js"></script>
    <!-- moment.js -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- bootstrap js -->
    <script
      type="text/javascript"
      src="js/bootstrap-datetimepicker.min.js"
    ></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/witeng-script.js"></script>
    <script>
      // HTML document is loaded. DOM is ready.
      $(function () {
        $("#hotelCarTabs a").click(function (e) {
          e.preventDefault();
          $(this).tab("show");
        });

        $(".date").datetimepicker({
          format: "MM/DD/YYYY",
        });
        $(".date-time").datetimepicker();
        
        $("a[href*=#]:not([href=#])").click(function () {
          if (
            location.pathname.replace(/^\//, "") ==
              this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
          ) {
            var target = $(this.hash);
            target = target.length
              ? target
              : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
              $("html,body").animate(
                {
                  scrollTop: target.offset().top,
                },
                1000
              );
              return false;
            }
          }
        });
      });

      // Load Flexslider when everything is loaded.
      $(window).load(function () {
        // Vimeo API nonsense

        //	For images only
        $(".flexslider").flexslider({
          controlNav: false,
        });
      });
    </script>
  </body>
</html>
