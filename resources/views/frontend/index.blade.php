@extends('layouts.customer')


@section('title')
Study AI
@endsection

@section('content')
    @include('layouts.inc.IntroVideo')
    <div class="py-2">
        <div class="container d-flex align-items-center justify-content-around">
            <div class="border border-dark " style="width:20rem; background:black;"></div>
            <h3 class="text_green fw-bold">Teachers of Study AI</h3>
            <div class="border border-dark " style="width:20rem; background:black;"></div>
        </div>
    </div>
<section>
    <div class="py-5">
        <div class="container">
            <div class="row position-relative">
                <div class="col-4">
                    <a  href="{{url('/plumber')}}"  style="border:none;">
                        <div class="card-body zoom postion-relative">
                            <img src="{{asset('images/eee.jpg')}}"  class="w-100  rounded" height="300px"   alt="">
                            <div >
                                <h4 class="text_green fw-bold text-center py-2">Mr. Ali Ahmed</h4>
                                <h6 class="text-center">Computer Science</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{url('/electrician')}}"    style="border:none;">
                        <div class="card-body zoom postion-relative">
                            <img src="{{asset('images/fff.jpg')}}"  class="w-100  rounded" height="300px"  alt="">
                            <div >
                                <h4 class="text_green fw-bold text-center py-2">Mr. Waqas Khan</h4>
                                <h6 class="text-center">Management</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{url('/hardware')}}"  style="border:none;">
                        <div class="card-body zoom postion-relative">
                            <img src="{{asset('images/fhh.jpg')}}"  class="w-100  rounded" height="300px"  at="">
                            <div >
                                <h4  class="text_green fw-bold text-center py-2">Mr. Danish Zafar</h4>
                                <h6 class="text-center">English</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>


<section>
<div class="pt-2 pb-5">
        <div class="container d-flex align-items-center justify-content-around">
            <div class="border border-dark " style="width:20rem; background:black;"></div>
            <h3 class="text_green fw-bold">Reviews of Study AI</h3>
            <div class="border border-dark " style="width:20rem; background:black;"></div>
        </div>
</div>
    <div class="container mb-5">
        <div class="row g-3 pb-5">
            <div class="col-12">
                <div class="">
                <div class="testimonial-slider">
  <div id="carouselExampleControls" class="carousel carousel-dark">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="testimonial-title">
            <i class="bi bi-quote display-1"></i>
            <h2 class="fw-bold display-6">What our customers say</h2>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="col-md-8">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card">
                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-1-scaled.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                  <h5 class="card-title">Card title 1</h5>
                  <i class="bi bi-star-fill text-warning pe-1"></i>
                  <i class="bi bi-star-fill text-warning pe-1"></i>
                  <i class="bi bi-star-fill text-warning pe-1"></i>
                  <i class="bi bi-star-fill text-warning pe-1"></i>
                  <i class="bi bi-star-fill text-warning pe-1"></i>
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-2-scaled.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                  <h5 class="card-title">Card title 2</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-3-scaled.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                  <h5 class="card-title">Card title 3</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-4-scaled.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                  <h5 class="card-title">Card title 4</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-5-scaled.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                  <h5 class="card-title">Card title 5</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card">
                <div class="img-wrapper"><img src="https://codingyaar.com/wp-content/uploads/headshot-6-scaled.jpg" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                  <h5 class="card-title">Card title 6</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up
                    the bulk of the
                    card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


                </div>
            </div>
        </div>
    </div>

</section>

@endsection



@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom JS code after importing jquery and owl -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots:false,
            disable:false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>



    <script>
        swal("Done!", `${response.status}`, "success");
    </script>
@endsection
@section('css')
  <style>

    .owl-nav
    {
        display: block !important;
    }
    .owl-nav button
    {
        font-size: 2rem !important;
    }

</style>



@endsection


