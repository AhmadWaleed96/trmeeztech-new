@extends('front.master')

@section('content')
    <!-- start section title-page -->
<section class="title-page">
    <div class="container">
        <div class="row">
            <h2>About us</h2>
        </div>
    </div>
    <img class="interested-img interested-left" src="{{ asset('front/image/Vector 1.png') }}" alt="">
    <img class="interested-img interested-right" src="{{ asset('front/image/Vector 2.png') }}" alt="">
  </section>
  <!-- end section title-page -->

  <!-- start section about -->
  <section class="about d-flex flex-wrap">
    <div class="We-are col-12 col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
      <div class="left col-12 col-sm-12 col-md-6 col-lg-6">
        <p>We are</p>
        <h2>Tarmeez Tach</h2>
      </div>
      <div class="right col-12 col-sm-12 col-md-12 col-lg-6">
        <div class="cont">
          <p>You can now request a new website design or develop your existing website if you already have a website.
            All you have to do is tell us all the details that you need, and we will provide you with a distinguished group of designs to choose the appropriate shape, and we will help you in that with our experience,
            We do not work randomly, but rather we work according to carefully studied strategies and plans to stand out from your competitorsYou can now request a new website design or develop your existing website if you already have a website.
            </p>
        </div>
      </div>
    </div>
    <img class="about-img1 col-12" src="{{ asset('front/image/Rectangle 170.png') }}" alt="">

    <div class="Tarmeez-Tach col-12 col-sm-12 col-md-12 col-lg-6">
        <h2>Tarmeez Tach</h2>
        <p>You can now request a new website design or develop your existing website if you already have a website.
          All you have to do is tell us all the details that you need, and we will provide you with a distinguished group of designs to choose the appropriate shape, and we will help you in that with our experience,
          We do not work randomly, but rather we work according to carefully studied strategies and plans to stand out from your competitorsYou can now request a new website design or develop your existing website if you already have a website.
          </p>
    </div>
    <img class="about-img2 col-12 col-sm-12 col-md-12 col-lg-6" src="{{ asset('front/image/Rectangle 163.png') }}" alt="">
  </section>
  <!-- end section about -->

  <!-- start section consultation -->
  <section class="consultation">
    <div class="form-consultation">
        <div class="title">
            <h1>Get a free consultation</h1>
                <div class="img-consultation">
                    <img class="back-consultation" src="{{ asset('front/image/Group 11042.png') }}" alt="">
                    <img class="image-consultation" src="{{ asset('front/image/image 13.png') }}" alt="">
                </div>
        </div>
        <div class="title">
            <div class="paragraph" style="width: 70%; margin: 0;">
                <p class="text-start">The key to being a brand that not only makes a good impression, but also</p>
            </div>
        </div>
        <form action="">
            <input type="text" name="" placeholder="Name">
            <input type="text" name="" placeholder="Phone">
            <input type="text" name="" placeholder="Email">
            <input type="text" name="" placeholder="Service">
            <input type="text" name="" placeholder="Message" style="height: 50px;">
            <div class="bb">
                <button class="btn-consultation">Done</button>
            </div>
        </form>
    </div>

  </section>
  <!-- end section consultation -->


@endsection
