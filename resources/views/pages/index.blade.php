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
                        <img src="{{ asset('assets/img/icon/cucumber-slice.png') }}" class="card-img-top" alt="Category 3">
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
                  <a style="text-decoration: none" href="#">
                    <div class="zoom-effect">
                      <img src="{{ asset('assets/img/icon/bell-pepper.png') }}" alt="Grocery Item 5">
                    </div>
                  </a>
                  <div class="groceries-details">
                    <span class="groceries-price">$9.99 <del>$12.99</del></span>
                    <h2 class="groceries-title">Grocery Item 5</h2>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-plus"></i></a>
                </div>

                <div class="groceries-card">
                  <a style="text-decoration: none" href="#">
                    <div class="zoom-effect">
                      <img src="{{ asset('assets/img/icon/chili.png') }}" alt="Grocery Item 5">
                    </div>
                  </a>
                  <div class="groceries-details">
                    <span class="groceries-price">$9.99 <del>$12.99</del></span>
                    <h2 class="groceries-title">Grocery Item 5</h2>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-plus"></i></a>
                </div>

                <div class="groceries-card">
                  <a style="text-decoration: none" href="#">
                    <div class="zoom-effect">
                      <img src="{{ asset('assets/img/icon/chili.png') }}" alt="Grocery Item 5">
                    </div>
                  </a>
                  <div class="groceries-details">
                    <span class="groceries-price">$9.99 <del>$12.99</del></span>
                    <h2 class="groceries-title">Grocery Item 5</h2>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-plus"></i></a>
                </div>

                <div class="groceries-card">
                  <a style="text-decoration: none" href="#">
                    <div class="zoom-effect">
                      <img src="{{ asset('assets/img/icon/carrots.png') }}" alt="Grocery Item 5">
                    </div>
                  </a>
                  <div class="groceries-details">
                    <span class="groceries-price">$9.99 <del>$12.99</del></span>
                    <h2 class="groceries-title">Grocery Item 5</h2>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-plus"></i></a>
                </div>
                <div class="groceries-card">
                  <a style="text-decoration: none" href="#">
                    <div class="zoom-effect">
                      <img src="{{ asset('assets/img/icon/bell-pepper.png') }}" alt="Grocery Item 5">
                    </div>
                  </a>
                  <div class="groceries-details">
                    <span class="groceries-price">$9.99 <del>$12.99</del></span>
                    <h2 class="groceries-title">Grocery Item 5</h2>
                  </div>
                  <a href="#" class="btn btn-primary">Add to Cart <i class="fa-solid fa-plus"></i></a>
                </div>

            </div>
        </div>
    </section>

{{-- ad-banner-section-starts-here --}}

<section class="ad-section">
  <div class="container">
    <div class="ad-banner">
      <img src="{{asset('assets/img/ad/banner-8.webp')}}" alt="Ad Banner 1">
    </div>
    <div class="ad-banner">
      <img src="{{asset('assets/img/ad/banner-9.webp')}}" alt="Ad Banner 2">
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




    <style>
        .card {
            top: 20px;
            margin-bottom: 117px;
            border: none;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-ancor:hover {
          text-decoration: none;
        }

        .card-img-top {
            padding-top: 30px;
            padding-bottom: 10px;
            padding-left: 45px;
            padding-right: 45px;
            margin-bottom: 2;
            object-fit: cover;
        }

        .card-body {
            margin-top: 15px;
            text-align: center;
            padding:0;
        }

        .card-title {
            padding-top: 10px;
            font-weight: bold;
            border-top: solid 2px #f3f3f3;
            font-size: 16px;
            color: black;
            text-decoration: none;
        }

        .card-text {
            color: #888;
            margin-bottom: 20px;
        }

        .card-body .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s;
        }

        .card-body .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>

    <style>
        /* Custom styles for the groceries section */
        /* Custom styles for the groceries section */
        /* Custom styles for the groceries section */
        /* Custom styles for the groceries section */
       /* Custom styles for the groceries section */
.groceries-section {
  padding: 50px 0;
  background-color: #ffffff;
}

.container {
  max-width: 1435px !important;
  margin: 0 auto !important;
}

.title-wrapper {
  text-align: center;
  margin-bottom: 40px;
}

.title-wrapper h2 {
  font-size: 28px;
  color: #333333;
}

.groceries-section .row {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  /* Display 5 cards in a row */
  grid-gap: 20px;
}

.groceries-card {
  background-color: #fff;
  border-radius: 4px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  position: relative;
}

.groceries-card img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 10px;
    padding: 55px;
    object-fit: cover;
  transform: scale(1);
  transition: transform 0.3s ease;
}

.groceries-card img:hover {
  transform: scale(1.1);
}

.groceries-details {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
  text-align: left;
  margin-bottom: 10px;
}

.groceries-title {
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 5px;
}

.groceries-price {
    font-size: 15px;
    font-weight: 400;
    color: #000000;
    margin-bottom: 5px;
}
.groceries-price del {
  font-size: 12px;
  color:grey;
}

.groceries-card .btn {
    display: inline-block;
    background-color: #f0f0f0;
    color: #474747;
    padding: 5px 70px;
    border-radius: 3px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    border: solid 1px #e9e9e9;
    margin-bottom: 5px;
    font-weight: 400;
}

.groceries-card .btn:hover {
  bbackground-color: #a33030 !important;
  border: solid 1px #e9e9e9;
  margin-bottom: 5px;
}
.groceries-card a i {
  font-size: 14px;
}

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
