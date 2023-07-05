@extends('layout.app')
@section('content')

{{-- card-design  --}}
<div class="hero-categories">
    <div class="container">
        <div class="row">
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

@endsection
