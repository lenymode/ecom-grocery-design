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
                        <a href="#"><img src="{{ asset('assets/img/ad/banner-8.webp') }}" alt="Ad Banner 1"
                                class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ad-banner">
                        <a href="#"><img src="{{ asset('assets/img/ad/banner-9.webp') }}" alt="Ad Banner 2"
                                class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- offer-section  --}}

    <div class="container">
        <div class="row special-products">
            <div class="col-md-12">
                <h2 class="section-title">Special Products</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="row special-products">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/groceries/oil.png') }}" alt="Product 5">
                            </div>
                            <div class="product-details">
                                <span class="product-title">$24.99</span>
                                <p class="product-price">Lorem, ipsum dolor.</p>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/groceries/cabbage.png') }}" alt="Product 5">
                            </div>
                            <div class="product-details">
                                <span class="product-title">$24.99</span>
                                <p class="product-price">Lorem, ipsum dolor.</p>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/groceries/ramen.png') }}" alt="Product 5">
                            </div>
                            <div class="product-details">
                                <span class="product-title">$24.99</span>
                                <p class="product-price">Lorem, ipsum dolor.</p>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/groceries/chicken.png') }}" alt="Product 5">
                            </div>
                            <div class="product-details">
                                <span class="product-title">$24.99</span>
                                <p class="product-price">Lorem, ipsum dolor.</p>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/groceries/hilsha.png') }}" alt="Product 5">
                            </div>
                            <div class="product-details">
                                <span class="product-title">$24.99</span>
                                <p class="product-price">Lorem, ipsum dolor.</p>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/groceries/meat.png') }}" alt="Product 5">
                            </div>
                            <div class="product-details">
                                <span class="product-title">$24.99</span>
                                <p class="product-price">Lorem, ipsum dolor.</p>
                                <button class="add-to-cart">
                                    Add to Cart
                                    <span class="plus-button">+</span>
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-md-4">
                <div class="offer-cover">
                    <div class="offer-tag">Most Popular</div>
                    <a href="#"><img src="{{ asset('assets/img/groceries/meat.png') }}" alt="Offer Cover"></a>
                    <div class="price">
                        <span class="original-price">$59.99 <span style="font-size: 14px"><span style="color:grey">$
                                    <del>65.00</del></span></span></span>
                    </div>
                    <h3 class="product-title">Spicy Noodles</h3>
                    <p>Lay's Kettle Cooked Ok Ok Potato Chips</p>
                    <div class="countdown">
                        <div class="countdown-item">
                            <span class="countdown-value">00</span>
                            <span class="countdown-label">DD</span>
                        </div>
                        <div class="separation">:</div>
                        <div class="countdown-item">
                            <span class="countdown-value">02</span>
                            <span class="countdown-label">HH</span>
                        </div>
                        <div class="separation">:</div>
                        <div class="countdown-item">
                            <span class="countdown-value">40</span>
                            <span class="countdown-label">MM</span>
                        </div>
                        <div class="separation">:</div>
                        <div class="countdown-item">
                            <span class="countdown-value">20</span>
                            <span class="countdown-label">SS</span>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress"></div>
                    </div>

                    <div class="sold-items"><span style="color: grey">
                            <div class="dot1"></div>Sold:
                        </span> 50 items</div>
                    <div class="available-items"><span style="color:grey">
                            <div class="dot2"></div>Available:
                        </span> 21 items</div>
                </div>
            </div>

        </div>
    </div>

    {{-- blog-section-starts-here  --}}

    <div class="container">
        <div class="blog-section">
          <div class="text-center mb-4">
            <h2>Blog Section</h2>
            <p>Check out our latest blog posts.</p>
          </div>
          <div id="blogSlider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <div class="card">
                      <img src="{{asset('assets/img/blog/1.webp')}}" class="card-img-top" alt="Blog Image 1">
                      <div class="card-body">
                        <h5 class="card-title"><a href="#">Blog Title 1</a></h5>
                        <p class="card-text">Short description of Blog 1.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="card">
                      <img src="{{asset('assets/img/blog/2.webp')}}" class="card-img-top" alt="Blog Image 2">
                      <div class="card-body">
                        <h5 class="card-title"><a href="#">Blog Title 2</a></h5>
                        <p class="card-text">Short description of Blog 2.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="card">
                      <img src="{{asset('assets/img/blog/3.webp')}}" class="card-img-top" alt="Blog Image 3">
                      <div class="card-body">
                        <h5 class="card-title"><a href="#">Blog Title 3</a></h5>
                        <p class="card-text">Short description of Blog 3.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <div class="card">
                      <img src="{{asset('assets/img/blog/4.webp')}}" class="card-img-top" alt="Blog Image 4">
                      <div class="card-body">
                        <h5 class="card-title"><a href="#">Blog Title 4</a></h5>
                        <p class="card-text">Short description of Blog 4.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#blogSlider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#blogSlider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>





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
