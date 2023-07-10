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

    <div class="container">
        <div class="row special-products">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/groceries/cabbage.png') }}" alt="Product 1">
                            </div>
                            <div class="product-details">
                                <h3 class="product-title">Product 1</h3>
                                <p class="product-price">$29.99</p>
                                <p class="product-del-price">$39.99</p>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/groceries/cabbage.png') }}" alt="Product 2">
                            </div>
                            <div class="product-details">
                                <h3 class="product-title">Product 2</h3>
                                <p class="product-price">$19.99</p>
                                <p class="product-del-price">$24.99</p>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/groceries/chicken.png') }}" alt="Product 3">
                            </div>
                            <div class="product-details">
                                <h3 class="product-title">Product 3</h3>
                                <p class="product-price">$14.99</p>
                                <p class="product-del-price">$19.99</p>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/groceries/chicken.png') }}" alt="Product 4">
                            </div>
                            <div class="product-details">
                                <h3 class="product-title">Product 4</h3>
                                <p class="product-price">$39.99</p>
                                <p class="product-del-price">$49.99</p>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/groceries/cabbage.png') }}" alt="Product 5">
                            </div>
                            <div class="product-details">
                                <h3 class="product-title">Product 5</h3>
                                <p class="product-price">$24.99</p>
                                <p class="product-del-price">$29.99</p>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('assets/img/groceries/oil.png') }}" alt="Product 6">
                            </div>
                            <div class="product-details">
                                <h3 class="product-title">Product 6</h3>
                                <p class="product-price">$49.99</p>
                                <p class="product-del-price">$59.99</p>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-cover">
                  <a href="#"><img src="{{ asset('assets/img/groceries/ramen.png') }}" alt="Offer Cover"></a>
                  <div class="price">
                    <span class="original-price">$59.99 <span style="font-size: 14px">$ <del>65.00</del></span></span>

                  </div>
                  <h3 class="product-title">Big Offer</h3>
                  <div class="countdown">
                    <div class="countdown-item">
                      <span class="countdown-value">00</span>
                      <span class="countdown-label">Days</span>
                    </div>
                    <div class="countdown-item">
                      <span class="countdown-value">00</span>
                      <span class="countdown-label">Hours</span>
                    </div>
                    <div class="countdown-item">
                      <span class="countdown-value">00</span>
                      <span class="countdown-label">Minutes</span>
                    </div>
                    <div class="countdown-item">
                      <span class="countdown-value">00</span>
                      <span class="countdown-label">Seconds</span>
                    </div>
                  </div>
                </div>
              </div>


        </div>
    </div>

    <style>

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
