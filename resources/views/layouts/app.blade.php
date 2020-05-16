<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{$title}}</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets/css/style-starter.css">

</head>

<body>
<!-- site header -->
<header id="site-header" class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="{{route('home')}}">
          <span class="fa fa-shield"></span> Biznes_markaz
      </a>
      <button class="navbar-toggler bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="{{route('home')}}">Bosh sahifa<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}">Haqida</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('services')}}">Xizmatlar</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">Aloqa</a>
              </li>
          </ul>
      </div>
  </nav>
</header>
<!-- //site header -->

@yield('content')

<!-- site footer -->
<footer id="site-footer">
  <div class="top-footer">
    <div class="container my-md-5 my-4">
      <div class="row">
        <div class="col-lg-4">
          <div class="footer-logo mb-3">
            <a href="index.html">
              <span class="fa fa-shield"></span> Biznes_markaz
            </a>
          </div>
          <div>
            <p class="">«Zo'r qopqon yarating va butun dunyo sizning eshiklaringiz tomon yo'l
                    topib keladi!»</p>
          </div>
        </div>
        <!-- Quick Links -->
        <div class="col-lg-3 col-md-4 mt-lg-0 mt-5">
          <h4 class="footer-title">Tez havolalar</h4>
          <ul class="footer-list">
            <li><a href="{{route('about')}}"> Biz haqimizda</a></li>
            <li><a href="{{route('services')}}"> Xizmatlar</a></li>
            <li><a href="{{route('contact')}}"> Aloqa</a></li>
            
          </ul>
        </div>
        
      </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-lg-left text-center mb-lg-0 mb-3">
          <p class="copyright">© 2020 BIZNES_MARKAZ</p>
        </div>
        
      </div>
    </div>
  </div>
</footer>
<!-- //site footer -->

<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>

<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- //move top -->

<!-- javascript -->
<script src="/assets/js/jquery-3.3.1.min.js"></script>

<!-- libhtbox -->
<script src="/assets/js/lightbox-plus-jquery.min.js"></script>

<!-- particles -->
<script src='/assets/js/particles.min.js'></script>
<script src="/assets/js/script.js"></script>
<!-- //particles -->

<!-- owl carousel -->
<script src="/assets/js/owl.carousel.js"></script>
<script>
  $(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      margin: 10,
      nav: true,
      loop: false,
      responsive: {
        0: {
          items: 1
        },
        767: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- bootstrap -->
<script src="/assets/js/bootstrap.min.js"></script>

</body>
</html>