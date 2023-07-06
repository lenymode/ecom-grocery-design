@extends('layout.app')
@section('content')

{{-- card-design  --}}
<div class="hero-categories">
    <div class="container">
        <div class="row flex">
          <div class="col-md-2">
            <div class="card">
              <img src="{{asset('assets/img/icon/chili.png')}}" class="card-img-top" alt="Category 1">
              <div class="card-body">
                <h5 class="card-title">Chili</h5>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="{{asset('assets/img/icon/corn.png')}}" class="card-img-top" alt="Category 2">
              <div class="card-body">
                <h5 class="card-title">Corn</h5>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="{{asset('assets/img/icon/tomato.png')}}" class="card-img-top" alt="Category 3" height="80px" width="100%">
              <div class="card-body">
                <h5 class="card-title">Capcicam</h5>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="{{asset('assets/img/icon/cucumber-slice.png')}}" class="card-img-top" alt="Category 3">
                <div class="card-body">
                  <h5 class="card-title">Cucumber</h5>
                </div>

            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="{{asset('assets/img/icon/carrots.png')}}" class="card-img-top" alt="Category 3">
              <div class="card-body">
                <h5 class="card-title">Carrots</h5>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="card">
              <img src="{{asset('assets/img/icon/bell-pepper.png')}}" class="card-img-top" alt="Category 3">
              <div class="card-body">
                <h5 class="card-title">Capcicam</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>


{{-- grocery-section-starts-here  --}}

<section class="groceries-section">
  <div class="container">
    <div class="row">
      <!-- Grocery Card 1 -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="groceries-card">
          <h3>Grocery Item 1</h3>
          <p>Description of grocery item 1</p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>


      <!-- Grocery Card 2 -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="groceries-card">
          <h3>Grocery Item 2</h3>
          <p>Description of grocery item 2</p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>

      <!-- Grocery Card 3 -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="groceries-card">
          <h3>Grocery Item 3</h3>
          <p>Description of grocery item 3</p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>

      <!-- Grocery Card 4 -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="groceries-card">
          <h3>Grocery Item 4</h3>
          <p>Description of grocery item 4</p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>

      <!-- Grocery Card 5 -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="groceries-card">
          <h3>Grocery Item 5</h3>
          <p>Description of grocery item 5</p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>



      <!-- Grocery Card 2 -->

  </div>
</section>



  <style>
    .card {
        top: 20px;
        margin-bottom: 117px;
        border: none;
        border-radius: 10px;
        height: 210px;
        width: 195px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
      transition: transform 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
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
      text-align: center;
    }
    .card-title {
        padding-top: 10px;
    font-weight: bold;
    border-top: solid 2px #f3f3f3;
    font-size: 16px;
}

    .card-text {
      color: #888;
      margin-bottom: 20px;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
  </style>

<style>
  /* Custom styles for the groceries section */
  .groceries-section {
    padding: 50px 0;
    background-color: #f8f8f8;
  }

  .groceries-card {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-bottom: 20px;
  }
</style>




@endsection
