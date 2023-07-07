<div id="button" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#button" data-slide-to="0" class="active"></li>
    <li data-target="#button" data-slide-to="1"></li>
    <li data-target="#button" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/img/banner/antique-banner-img.png')}}" alt="Los Angeles" class="d-block w-100">
      <div class="carousel-caption">
        <h3>OK Groceries</h3>
        <p>Your E-commerce Solution is here</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/img/banner/antique-banner-img.png')}}" alt="Chicago" class="d-block w-100">
      <div class="carousel-caption">
        <h3>Good Groceries</h3>
        <p>Your E-commerce Solution is here</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/img/banner/antique-banner-img.png')}}" alt="New York" class="d-block w-100">
      <div class="carousel-caption">
        <h3>NexKraft Groceries</h3>
        <p>Your E-commerce Solution is here</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<style>
.carousel-inner img {
  width: 100%;
  height: auto;
  background: #F8DF9C;
}
.carousel-caption {
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #fff;
}
.carousel-caption h3 {
  font-size: 40px;
  color: #71461a;
}
.carousel-caption p {
  font-size: 20px;
  color: #c76026;
}
</style>
