<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Study AI</title>
    <script src="https://kit.fontawesome.com/3babc5211c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">



    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .bg_green {
            background-color: #0d6efd !important;
        }

        .text_green {
            color: #0d6efd !important;
        }

        .btn_green {
            background: #0d6efd;
            color: #fff;
            padding: 10px 20px !important;
        }

        .navbar-brand {
            border-top: 2px solid #0d6efd !important;
            border-bottom: 2px solid #0d6efd !important;
            color: #0d6efd;
        }

        .hero_section {
            background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgb(44 44 44 / 73%)), url(http://127.0.0.1:8000/assets/img/banner2.jpg) !important;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .product_img {
            width: 100%;
            height: 200px;
        }

        .product_img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .img-box {
            width: 500px !important;
            height: 400px !important;
        }


        .img-box img {
            width: 100% !important;
            height: 100% !important;
            object-position: cover;
        }

        .card-image {
            width: 300px !important;
            height: 300px !important;
        }


        .card-image img {
            width: 100% !important;
            height: 100% !important;
            object-position: cover;
        }

        a {
            text-decoration: none !important;
            color: #0d6efd;

        }

        .fixed-top {
            height: 4.5rem !important;
            z-index: 5000 !important;
        }

        .navbar>.container-fluid a:hover span {
            border-bottom: 2px solid #0d6efd !important;
        }

        .navbar>.container-fluid a.active span {
            border-bottom: 2px solid #0d6efd !important;
        }

        .zoom:hover {
            cursor: pointer;
            transform: scale(1.05);
            transition: all 0.3s linear;
        }

        .notbtn {
            width: 150px !important;
            height: 50px !important;
            padding: 10px !important;
            transition: all 0.5s;
            outline: none;
            border-style: none;
        }

        .notbtn:hover {
            color: white !important;
            border: 2px solid white;
        }

        .hello-card {
            cursor: pointer;
            transition: all 0.5s;
        }

        .hello-card:hover {
            transform: scale(1.04);
        }

        * {
            scroll-behavior: smooth;
        }


        .hello {
            width: 200px !important;
        }

        .hello input {
            color: #0d6efd !important;
        }

        .btn:focus,
        .btn:active {
            outline: none !important;
            box-shadow: none;
        }

        .hello input::placeholder {
            color: #0d6efd !important;
        }

        #loginblack {
            color: white !important;
        }

        #loginblack:hover {
            color: black !important;
        }

        .cus_hero {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .justify {
            text-align: justify;
        }

        .border-bottom-custom {
            border-bottom: 2px solid #0d6efd;
        }

        .dropdown-item:hover,
        .dropdown-item.active {
            background-color: #0d6efd !important;
            color: #fff !important;
        }

        .btn_outline_green {
            color: #0d6efd;
            border-color: #0d6efd;
        }

        .btn_outline_green:hover {
            color: #fff;
            background-color: #0d6efd;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.15rem #0d6efd !important;
            border: none !important;
        }

        .testimonial-slider {
  background-color: #0d6efd;
  padding: 2em 2em 3em;
}
.testimonial-title {
  color: #fff;
}
.testimonial-title h2 {
  padding-left: 0.2em;
}
.card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
  height: 100%;
}
.carousel-control-prev,
.carousel-control-next {
  background-color: #fff;
  width: 3em;
  height: 3em;
  border-radius: 50%;
  top: 60%;
  transform: translateY(-50%);
}

@media (min-width: 576px) {
  .carousel-item {
    margin-right: 0;
    flex: 0 0 50%;
    display: block;
  }
  .carousel-inner {
    display: flex;
  }
}
@media (min-width: 768px) {
  .carousel-inner {
    padding: 1em;
  }
  .carousel-control-prev,
  .carousel-control-next {
    opacity: 1;
    position: absolute;
    left: 1em;
    top: 90%;
    transform: translateY(-50%);
  }
  .carousel-control-next {
    left: 5em;
  }
}

    </style>


    @yield('css')
</head>

<body>

    @include('layouts.inc.frontNavBar')

    <div class="content">
        @yield('content')
    </div>
    @include('layouts.inc.frontFooter')



    @if (session('status'))
    <script>
        swal("Done!", "{{session('status')}}", "success");
    </script>
    @endif

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('scripts')

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





<script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll < 50) {
            $('.fixed-top').css('background', 'transparent');
        } else {
            $('.fixed-top').css('background', 'white');
            $('.navbar>.container-fluid a').css('color', 'rgba(37,33,34,255)');
        }
    });
</script>

<script>
    var multipleCardCarousel = document.querySelector("#carouselExampleControls");

if (window.matchMedia("(min-width: 576px)").matches) {
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false
  });
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;
  $("#carouselExampleControls .carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 3) {
      scrollPosition += cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $("#carouselExampleControls .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}

</script>
<script>
    $(function() {
        var availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];
        $("#search_product").autocomplete({
            source: availableTags
        });
    });
</script>

<script>
  window.addEventListener("load" , () => {
    document.querySelector('.loaders').classList.add("loader--hidden")
    document.querySelector('.loaders').addEventListener("transitioned", () => {
      document.body.removeChild(document.querySelector('.loaders'));
    })
  })
</script>

</html>
