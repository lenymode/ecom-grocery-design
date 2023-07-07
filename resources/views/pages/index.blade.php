@extends('layout.app')
@section('content')
    {{-- card-design  --}}
    <div class="hero-categories">
        <div class="container">
            <div class="row g-2 flex">
                <div class="col-md-2 col-lg-2">
                    <a class="card-ancor" href="">
                        <div class="card">
                            <img src="{{ asset('assets/img/icon/corn.png') }}" class="card-img-top" alt="Category 2">
                            <div class="card-body">
                                <h5 class="card-title">Corn</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="card-ancor" href="">
                        <div class="card">
                            <img src="{{ asset('assets/img/icon/chili.png') }}" class="card-img-top" alt="Category 2">
                            <div class="card-body">
                                <h5 class="card-title">Chili</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="card-ancor" href="">
                        <div class="card">
                            <img src="{{ asset('assets/img/icon/tomato.png') }}" class="card-img-top" alt="Category 3"
                                height="80px" width="100%">
                            <div class="card-body">
                                <h5 class="card-title">Capcicam</h5>
                            </div>
                        </div>
                </div>
                </a>

                <div class="col-md-2">
                    <a class="card-ancor" href="">
                        <div class="card">
                            <img src="{{ asset('assets/img/icon/cucumber-slice.png') }}" class="card-img-top"
                                alt="Category 3">
                            <div class="card-body">
                                <h5 class="card-title">Cucumber</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="card-ancor" href="">
                        <div class="card">
                            <img src="{{ asset('assets/img/icon/carrots.png') }}" class="card-img-top" alt="Category 3">
                            <div class="card-body">
                                <h5 class="card-title">Carrots</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="card-ancor" href="">
                        <div class="card">
                            <img src="{{ asset('assets/img/icon/bell-pepper.png') }}" class="card-img-top" alt="Category 3">
                            <div class="card-body">
                                <h5 class="card-title">Capcicam</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    {{-- grocery-section-starts-here  --}}

    <section class="groceries-section">

        <div class="container">

            <div class="title-wrapper">
                <h2>Best Grocery Seller Near You</h2>
                <p>We provide best quality & fresh grocery items near your location</p>
            </div>
            <div class="row">
                <!-- Grocery Card 1 -->

                <div class="groceries-card">
                    <div class="discount-label">ON SALE</div> <!-- Added discount label -->
                    <a style="text-decoration: none" href="#">
                        <div class="zoom-effect">
                            <img src="{{ asset('assets/img/groceries/oil.png') }}" alt="Grocery Item 5">
                        </div>
                    </a>
                    <div class="groceries-details">
                        <span class="groceries-price">$9.99 <del>$12.99</del></span>
                        <a href="#">
                            <h2 class="groceries-title">Organic Firm Fresh White Lettuce</h2>
                        </a>
                    </div>
                    <a href="#" class="button btn  ">Add to Cart </a>
                </div>

                <div class="groceries-card">
                    <div class="discount-label">ON SALE</div> <!-- Added discount label -->
                    <a style="text-decoration: none" href="#">
                        <div class="zoom-effect">
                            <img src="{{ asset('assets/img/groceries/ramen.png') }}" alt="Grocery Item 5">
                        </div>
                    </a>
                    <div class="groceries-details">
                        <span class="groceries-price">$9.99 <del>$12.99</del></span>
                        <a href="#">
                            <h2 class="groceries-title">Organic Firm Fresh White Lettuce</h2>
                        </a>
                    </div>
                    <a href="#" class="button btn  ">Add to Cart </a>
                </div>


                <div class="groceries-card">
                    <div class="discount-label">ON SALE</div> <!-- Added discount label -->
                    <a style="text-decoration: none" href="#">
                        <div class="zoom-effect">
                            <img src="{{ asset('assets/img/groceries/chicken.png') }}" alt="Grocery Item 5">
                        </div>
                    </a>
                    <div class="groceries-details">
                        <span class="groceries-price">$9.99 <del>$12.99</del></span>
                        <a href="#">
                            <h2 class="groceries-title">Organic Firm Fresh White Lettuce</h2>
                        </a>
                    </div>
                    <a href="#" class="button btn  ">Add to Cart </a>
                </div>

                <div class="groceries-card">
                    <div class="discount-label">ON SALE</div> <!-- Added discount label -->
                    <a style="text-decoration: none" href="#">
                        <div class="zoom-effect">
                            <img src="{{ asset('assets/img/groceries/cabbage.png') }}" alt="Grocery Item 5">
                        </div>
                    </a>
                    <div class="groceries-details">
                        <span class="groceries-price">$9.99 <del>$12.99</del></span>
                        <a href="#">
                            <h2 class="groceries-title">Organic Firm Fresh White Lettuce</h2>
                        </a>
                    </div>
                    <a href="#" class="button btn  ">Add to Cart </a>
                </div>

                <div class="groceries-card">
                    <div class="discount-label">ON SALE</div> <!-- Added discount label -->
                    <a style="text-decoration: none" href="#">
                        <div class="zoom-effect">
                            <img src="{{ asset('assets/img/groceries/hilsha.png') }}" alt="Grocery Item 5">
                        </div>
                    </a>
                    <div class="groceries-details">
                        <span class="groceries-price">$9.99 <del>$12.99</del></span>
                        <a href="#">
                            <h2 class="groceries-title">Organic Firm Fresh White Lettuce</h2>
                        </a>
                    </div>
                    <a href="#" class="button btn  ">Add to Cart </a>
                </div>
                <div class="groceries-card">
                  <div class="discount-label">ON SALE</div> <!-- Added discount label -->
                  <a style="text-decoration: none" href="#">
                      <div class="zoom-effect">
                          <img src="{{ asset('assets/img/groceries/oil.png') }}" alt="Grocery Item 5">
                      </div>
                  </a>
                  <div class="groceries-details">
                      <span class="groceries-price">$9.99 <del>$12.99</del></span>
                      <a href="#">
                          <h2 class="groceries-title">Organic Firm Fresh White Lettuce</h2>
                      </a>
                  </div>
                  <a href="#" class="button btn  ">Add to Cart </a>
              </div>

              <div class="groceries-card">
                  <div class="discount-label">ON SALE</div> <!-- Added discount label -->
                  <a style="text-decoration: none" href="#">
                      <div class="zoom-effect">
                          <img src="{{ asset('assets/img/groceries/ramen.png') }}" alt="Grocery Item 5">
                      </div>
                  </a>
                  <div class="groceries-details">
                      <span class="groceries-price">$9.99 <del>$12.99</del></span>
                      <a href="#">
                          <h2 class="groceries-title">Organic Firm Fresh White Lettuce</h2>
                      </a>
                  </div>
                  <a href="#" class="button btn  ">Add to Cart </a>
              </div>


              <div class="groceries-card">
                  <div class="discount-label">ON SALE</div> <!-- Added discount label -->
                  <a style="text-decoration: none" href="#">
                      <div class="zoom-effect">
                          <img src="{{ asset('assets/img/groceries/chicken.png') }}" alt="Grocery Item 5">
                      </div>
                  </a>
                  <div class="groceries-details">
                      <span class="groceries-price">$9.99 <del>$12.99</del></span>
                      <a href="#">
                          <h2 class="groceries-title">Organic Firm Fresh White Lettuce</h2>
                      </a>
                  </div>
                  <a href="#" class="button btn  ">Add to Cart </a>
              </div>

              <div class="groceries-card">
                  <div class="discount-label">ON SALE</div> <!-- Added discount label -->
                  <a style="text-decoration: none" href="#">
                      <div class="zoom-effect">
                          <img src="{{ asset('assets/img/groceries/cabbage.png') }}" alt="Grocery Item 5">
                      </div>
                  </a>
                  <div class="groceries-details">
                      <span class="groceries-price">$9.99 <del>$12.99</del></span>
                      <a href="#">
                          <h2 class="groceries-title">Organic Firm Fresh White Lettuce</h2>
                      </a>
                  </div>
                  <a href="#" class="button btn  ">Add to Cart </a>
              </div>

              <div class="groceries-card">
                  <div class="discount-label">ON SALE</div> <!-- Added discount label -->
                  <a style="text-decoration: none" href="#">
                      <div class="zoom-effect">
                          <img src="{{ asset('assets/img/groceries/hilsha.png') }}" alt="Grocery Item 5">
                      </div>
                  </a>
                  <div class="groceries-details">
                      <span class="groceries-price">$9.99 <del>$12.99</del></span>
                      <a href="#">
                          <h2 class="groceries-title">Organic Firm Fresh White Lettuce</h2>
                      </a>
                  </div>
                  <a href="#" class="button btn  ">Add to Cart </a>
              </div>



            </div>



            <div class="view-all">
                <a href="#">
                    <h2>View All</h2>
                </a>
            </div>
        </div>
    </section>

    {{-- ad-banner-section-starts-here --}}

    <section class="ad-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="ad-banner">
                        <img src="{{ asset('assets/img/ad/banner-8.webp') }}" alt="Ad Banner 1" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ad-banner">
                        <img src="{{ asset('assets/img/ad/banner-9.webp') }}" alt="Ad Banner 2" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- offer-section  --}}

    <section class="offer-section">
        <div class="container">
            <div class="col-md-12">
                <div class="row grid">
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container text-center my-3">
      <h2 class="font-weight-light">Bootstrap 4 - Multi Item Carousel</h2>
      <div class="row mx-auto my-auto">
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                  <div class="carousel-item active">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="{{asset('assets/img/groceries/cabbage.png')}}">
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="{{asset('assets/img/groceries/cabbage.png')}}">
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="{{asset('assets/img/groceries/cabbage.png')}}">
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="http://placehold.it/380?text=4">
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="http://placehold.it/380?text=5">
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="http://placehold.it/380?text=6">
                          </div>
                      </div>
                  </div>
              </div>
              <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
      <h5 class="mt-2">Advances one slide at a time</h5>
  </div>

  <script>
    "$('#recipeCarousel').carousel({\n  interval: 10000\n})\n\n$('.carousel .carousel-item').each(function(){\n    var minPerSlide = 3;\n    var next = $(this).next();\n    if (!next.length) {\n    next = $(this).siblings(':first');\n    }\n    next.children(':first-child').clone().appendTo($(this));\n    \n    for (var i=0;i<minPerSlide;i++) {\n        next=next.next();\n        if (!next.length) {\n        \tnext = $(this).siblings(':first');\n      \t}\n        \n        next.children(':first-child').clone().appendTo($(this));\n      }\n});\n"
  </script>
  <style>
    "@media (max-width: 768px) {\n    .carousel-inner .carousel-item > div {\n        display: none;\n    }\n    .carousel-inner .carousel-item > div:first-child {\n        display: block;\n    }\n}\n\n.carousel-inner .carousel-item.active,\n.carousel-inner .carousel-item-next,\n.carousel-inner .carousel-item-prev {\n    display: flex;\n}\n\n/* display 3 */\n@media (min-width: 768px) {\n    \n    .carousel-inner .carousel-item-right.active,\n    .carousel-inner .carousel-item-next {\n      transform: translateX(33.333%);\n    }\n    \n    .carousel-inner .carousel-item-left.active, \n    .carousel-inner .carousel-item-prev {\n      transform: translateX(-33.333%);\n    }\n}\n\n.carousel-inner .carousel-item-right,\n.carousel-inner .carousel-item-left{ \n  transform: translateX(0);\n}\n\n"
  </style>




    <style>
        .ad-section {
            margin-top: 20px;
            margin-bottom: 69px;
        }

        .ad-section .container {
            max-width: 1435px !important;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }

        .ad-banner {
            flex: 1;
            margin-right: 10px;
        }

        .ad-banner:last-child {
            margin-right: 0;
        }

        .ad-banner img {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 4px;
        }
    </style>
@endsection
