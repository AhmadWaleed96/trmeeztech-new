@extends('front.master')

@section('title', 'Blog -' . config('app.name'))

@section('content')

<!-- start section title-page -->
<section class="title-page">
  <div class="container">
      <div class="row">
          <h2>Blog</h2>
      </div>
  </div>
  <img class="interested-img interested-left" src="image/Vector 1.png" alt="">
  <img class="interested-img interested-right" src="image/Vector 2.png" alt="">
</section>
<!-- end section title-page -->

<section class="blog">
  <div class="container">
    <div class="row">
      <div class="card-blog">
        <img src="image/Rectangle 180.png" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>Saudi National Day</h2>
          <p>You can now request a new website design or develop your existing website if you already have a website.All you have to do is tell us all the details that you need, and we will provide you with a distinguished group of designs to choose the appropriate shape, and we will help you in that with our experience,We do not work randomly, but rather we work according to carefully studied strategies and plans to stand out from your competitors</p>
        </div>
      </div>

      <div class="card-blog">
        <img src="image/Rectangle 180.png" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>Saudi National Day</h2>
          <p>You can now request a new website design or develop your existing website if you already have a website.All you have to do is tell us all the details that you need, and we will provide you with a distinguished group of designs to choose the appropriate shape, and we will help you in that with our experience,We do not work randomly, but rather we work according to carefully studied strategies and plans to stand out from your competitors</p>
        </div>
      </div>

      <div class="card-blog">
        <img src="image/Rectangle 180.png" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>Saudi National Day</h2>
          <p>You can now request a new website design or develop your existing website if you already have a website.All you have to do is tell us all the details that you need, and we will provide you with a distinguished group of designs to choose the appropriate shape, and we will help you in that with our experience,We do not work randomly, but rather we work according to carefully studied strategies and plans to stand out from your competitors</p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
